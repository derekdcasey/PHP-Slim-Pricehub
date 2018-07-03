<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$app->map('/passreset/request', function() use ($app, $log) {
    if ($app->request()->isGet()) {
        //state 1: first show
        $app->render('passreset_request.html.twig');
        return;
    }
    //in Post - receiving submission
    $email = $app->request()->post('email');
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    if ($user) {
        $secretToken = generateRandomString(50);

        /* Version 2: insertUpdate */
        DB:: insertUpdate('passresets', array(
            'userId' => $user['id'],
            'secretToken' => $secretToken,
            'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+1 day"))
        ));
        $url = 'https://' . $_SERVER['SERVER_NAME'] . '/passreset/token/' . $secretToken;
        $emailBody = $app->view()->render('passreset_email.html.twig', array(
            'name' => $user['name'],
            'url' => $url
        ));

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "From: Noreply <noreply@ipd10.com>\r\n";
        $headers .= sprintf("To: %s <%s>\r\n", htmlentities($user['name']), $user['email']);

        mail($email, "Your password reset for " . $_SERVER['SERVER_NAME'], $emailBody, $headers);

        $app->render('passreset_request_success.html.twig');
    } else { //State 3: failed request, email not registered
        $app->render('passreset_request.html.twig', array('error' => true));
    }
})->via('GET', 'POST');

$app->map('/passreset/token/:secretToken', function($secretToken) use($app, $log) {
    $errorList = array();
    $pass1 = $app->request()->post('pass1');
    $pass2 = $app->request()->post('pass2');
    $row = DB::queryFirstRow("SELECT * FROM passresets WHERE secretToken=%s", $secretToken);
    if (!$row) {//row not found
        $app->render('passreset_notfound_expired.html.twig');
        return;
    }
    if (strtotime($row['expiryDateTime'] < time())) {
        //row found but token expired
        $app->render('passreset_form.html.twig');
        return;
    }

    $user = DB::queryFirstRow("SELECT * FROM users WHERE id=%i", $row['userId']);
    if (!$user) {
        $log->err(sprintf("Passreset for token %s user id=%d not found", $row['secretToken'], $row['userId']));
        $app->render('error_internal.html.twig');
    }

    if ($app->request()->isGet()) { // state 1: first show
        $app->render('passreset_form.html.twig', array(
            'name' => $user['name'], 'email' => $user['email']
        ));
    } else { //receiving POST with new password
        // FIXME: VERIFY QUALITY OF NEW PASSWORD
        //
    if ($pass1 != $pass2) {
            array_push($errorList, "Passwords don't match");
        } else {
            if (strlen($pass1) < 2 || strlen($pass2) > 50) {
                array_push($errorList, "Password must be between 2 and 50");
            }
        }
//
//password pattern check
        if (!preg_match('/[a-z]/', $pass1) || !preg_match('/[a-z]/', $pass1) || !preg_match('/[0-9' . preg_quote("!@#\$%^&*()_-+={}[],.<>;:'\"~`") . ']/', $pass1)) {
            array_push($errorList, "Password must have at least one lowercase, one uppercase, and one number.");
        }
//
        if ($errorList) { // 3. failed submission
            $app->render('passreset_form.html.twig', array(
                'errorList' => $errorList,
                'name' => $user['name'],
                'email' => $user['email']
            ));
        } else { //2. successful submission
//encrypted password
            $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
            DB::update('users', array('password' => $passEnc), 'id=%d', $user['id']);
            $app->render('passreset_form_success.html.twig');
        }
    }
})->via('GET', 'POST');
