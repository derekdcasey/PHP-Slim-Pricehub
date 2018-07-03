<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

//Global Variables
$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession', $_SESSION['user']);


//JQuery check for email
$app->get('/isemailregistered/:email', function($email) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM users where email=%s", $email);
    echo!$row ? "" : '<span style="color:red; font-weight:bold;">Email Not Available</span>';
});




//Register 
$app->get('/register', function() use ($app) {
    $app->render('register.html.twig');
});

$app->post('/register', function() use ($app) {

    $name = $app->request()->post('name');
    $email = $app->request()->post('email');
    $pass1 = $app->request()->post('pass1');
    $pass2 = $app->request()->post('pass2');

    $values = array('email' => $email, 'name' => $name);
    $errorList = array();


    if(strlen($name) < 2 || strlen($name) > 50){
        array_push($errorList, "Name must be between 2 and 50 characters.");
        $values['name'] = '';
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        array_push($errorList, "Invalid email");
        $value['email'] = '';
    } else {
        $row = DB::queryFirstRow("SELECT * FROM users where email=%s", $email);
        if ($row) {
            array_push($errorList, "Email not available");
            $value['email'] = '';
        }
    }

    if ($pass1 != $pass2) {
        array_push($errorList, "Passwords do not match");
    } else {
        if (strlen($pass1) < 2 || strlen($pass1) > 50) {
            array_push($errorList, "Password must be between 2 and 50 characters");
        }
    }

    if ($errorList) {
        // 3. failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else {

        // 2. successful submission
        $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
        DB::insert('users', array('name' => $name, 'email' => $email, 'password' => $passEnc));
        $app->render('register_success.html.twig', array('name' => $name, 'email' => $email));
    }
});



//Login
$app->get('/login', function() use ($app) {
    $app->render('login.html.twig');
});

$app->post('/login', function() use ($app) {

    $email = $app->request()->post('email');
    $password = $app->request()->post('password');

    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);

    $error = false;

    if (!$row) {
        $error = true; // user not found
    } else {
        if (password_verify($password, $row['password']) == false) {
            $error = true; // password invalid
        }
    }

    if ($error) {
        //failed
        $app->render('login.html.twig', array('error' => true));
    } else {
        //success
        unset($row['password']);
        $_SESSION['user'] = $row;
        $app->render('index.html.twig');
    }
});

$app->get('/logout', function() use ($app) {
    $_SESSION['user'] = array();
    $app->render('logout.html.twig', array('userSession' => $_SESSION['user']));
});

//Password Reset
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$app->map('/passreset/request', function()use ($app, $log) {
    if ($app->request()->isGet()) {
        //State 1: first show
        $app->render('passreset_request.html.twig');
        return;
    }
    // in Post - receiving submission
    $email = $app->request()->post('email');
    $user = DB::queryFirstRow('SELECT * FROM users WHERE email=%s', $email);
    if ($user) {
        $secretToken = generateRandomString(50);
        
        DB::insertUpdate('passresets', array('userId' => $user['id'], 'secretToken' => $secretToken, 'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+1 day"))));
        $url = 'https://' . $_SERVER['SERVER_NAME'] . '/passreset/token/' . $secretToken;
        $emailBody = $app->view()->render('passreset_email.html.twig', array('url' => $url));
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html\r\n";
        $headers .= "From: Noreply <noreply@ipd10.com>\r\n";
        $headers .= "Date: " . date("Y-m-d H:i:s");
        $toEmail = sprintf("%s <%s>", htmlentities($user['name']), $user['email']);
        mail($toEmail, "Your password reset for" . $_SERVER['SERVER_NAME'], $emailBody, $headers);
        
        $log->info('Email sent for password reset for user id=' . $user['id']);
        $app->render('passreset_request_success.html.twig');
    } else {//state 3: failed request, email not registered
        $app->render('passreset_request.html.twig', array('error' => true));
    }
})->via('GET', 'POST');

$app->map('/passreset/token/:secretToken', function($secretToken) use ($app, $log) {
    $row = DB::queryFirstRow("SELECT * FROM passresets WHERE secretToken=%s", $secretToken);
    if (!$row) { // row not found
        $app->render('passreset_notfound_expired.html.twig');
        return;
    }
    if (strtotime($row['expiryDateTime']) < time()) {
        // row found but token expired
        $app->render('passreset_notfound_expired.html.twig');
        return;
    }
    //
    $user = DB::queryFirstRow("SELECT * FROM users WHERE id=%d", $row['userId']);
    if (!$user) {
        $log->err(sprintf("Passreset for token %s user id=%d not found", $row['secretToken'], $row['userId']));
        $app->render('error_internal.html.twig');
        return;
    }
    if ($app->request()->isGet()) { // State 1: first show
        $app->render('passreset_form.html.twig', array(
            'name' => $user['name'], 'email' => $user['email']
        ));
    } else { // receiving POST with new password
        $pass1 = $app->request()->post('pass1');
        $pass2 = $app->request()->post('pass2');
        // FIXME: verify quality of the new password using a function
        $errorList = array();
        if ($pass1 != $pass2) {
            array_push($errorList, "Passwords don't match");
        } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
            if (strlen($pass1) < 2 || strlen($pass1) > 50) {
                array_push($errorList, "Password must be between 2 and 50 characters long");
            }
        }
        if ($errorList) { // 3. failed submission
            $app->render('passreset_form.html.twig', array(
                'errorList' => $errorList,
                'name' => $user['name'],
                'email' => $user['email']
            ));
        } else { // 2. successful submission
            $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
            DB::update('users', array('password' => $passEnc), 'id=%d', $user['id']);
            $app->render('passreset_form_success.html.twig');
        }
    }
})->via('GET', 'POST');


