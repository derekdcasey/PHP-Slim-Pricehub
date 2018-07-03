<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}
//search
$app->post('/price/search/:term', function($term) use ($app) {
if(isset($_POST["term"])){
    
 $priceList = DB::query("SELECT stores.name AS storeName, products.name AS productName,prices.id AS priceId,storeId,productId,quantity,dateRegistered,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id LEFT JOIN products ON prices.productId = products.id WHERE products.name LIKE '%".$term."%' OR stores.name LIKE '%".$term."%'");
 if($priceList){
 $app->render('pricelist_ajax.html.twig', array('list' => $priceList));
}
 }
else
{
    $priceList = DB::query("SELECT stores.name AS storeName, products.name AS productName,products.id AS productId,prices.id AS priceId,storeId,productId,quantity,dateRegistered,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id LEFT JOIN products ON prices.productId = products.id");
    $app->render('pricelist_ajax.html.twig', array('list' => $priceList));
}
if(!$priceList){
    echo "No Results Found";
}

});

//JQuery check for barcode
$app->post('/isbarcoderegistered/:barcode', function($barcode) use ($app) {

    $values = DB::queryFirstRow("SELECT products.name AS productName,prices.id as priceId,productId,quantity,price,unit,onSpecial FROM prices LEFT JOIN products ON prices.productId = products.id WHERE products.barcode=%s", $barcode);
    if ($values) {
        header("Content-type: application/json");
        echo json_encode($values);
    }
});

//PRICE LIST
$app->get('/price/list', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    //
   
        $productsList = DB::query("SELECT stores.name AS storeName, products.name AS productName,products.id AS productId,prices.id AS priceId,storeId,productId,quantity,dateRegistered,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id LEFT JOIN products ON prices.productId = products.id ");
        $start = strtotime($productsList['dateRegistered']);
        $end = time(); //
        $dateDiff   = $end - $start;
    //   $priceCount = DB::queryFirstField("SELECT count(*) FROM prices"); for knowing max amount for ajax loading
$app->render('pricelist.html.twig', array('list' => $productsList));   
});


//AJAX LOAD MORE PRODUCTS TO PRICE LIST
//$app->get('/pricesList/:load', function($load) {
//    
//    $loadList = $load * 7;
//    
//        $pricesCont = DB::query("SELECT stores.name AS storeName, products.name AS productName,products.id AS productId,prices.id AS priceId,storeId,productId,quantity,dateRegistered,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id LEFT JOIN products ON prices.productId = products.id LIMIT %i,7", $loadList);
//        
//    echo json_encode($pricesCont);
//});



//JQuery check for email
//add/edit a price

$app->get('/price/:op(/:id)', function($op, $id = -1) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        echo "INVALID REQUEST"; // FIXME on Monday - display standard 404 from slim
        return;
    }
    //
    if ($id != -1) {
        $values = DB::queryFirstRow("SELECT stores.name AS storeName, products.name AS productName,products.barcode AS barcode,storeId,productId,quantity,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id LEFT JOIN products ON prices.productId = products.id WHERE prices.id=%i", $id);
        if (!$values) {
            echo "NOT FOUND";  // FIXME
            return;
        }
    } else { // nothing to load from database - adding
        $values = array();
    }
    $storeList=DB::query("SELECT * FROM stores");
    $app->render('price_addedit.html.twig', array(
        'v' => $values,
        'isEditing' => ($id != -1),
        'storeList'=>$storeList
    ));
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));


$app->post('/price/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('error_internal.html.twig');
        return;
    }
    $storeName = $app->request()->post('store');
    $productName = $app->request()->post('product');
    $price = $app->request()->post('price');
    $onSpecial = $app->request()->post('onSpecial');
    $quantity = $app->request()->post('quantity');
    $unit = $app->request()->post('unit');
    $lat = $app->request()->post('lat');
    $long = $app->request()->post('long');
    $barcode = $app->request()->post('barcode');

    $values = array('barcode' => $barcode, 'store' => $storeName, 'product' => $productName, 'price' => $price, 'onSpecial' => $onSpecial, 'quantity' => $quantity, 'unit' => $unit, 'lat' => $lat, 'long' => $long);
    $errorList = array();

    if (isset($onSpecial)) {
        $onSpecial = 1; //true
    } else {
        $onSpecial = 0; //false
    }

    if (empty($price) || $price < 0 || $price > 99999999.99) {
        $values['price'] = '';
        array_push($errorList, "Price must be between 0 and 99999999.99");
    }

    if (strlen($storeName) < 2 || strlen($storeName) > 50) {
        array_push($errorList, "Store must be between 2 and 50 characters");
    }

    if (strlen($productName) < 2 || strlen($productName) > 50) {
        array_push($errorList, "Product must be between 2 and 50 characters");
    }

    $productImage = array();
    if ($_FILES['productImage']['error'] != UPLOAD_ERR_NO_FILE) {
        $productImage = $_FILES['productImage'];
        if ($productImage['error'] != 0) {
            array_push($errorList, "Error uploading file");
            $log->err("Error uploading file: " . print_r($productImage, true));
        } else {
            if (strstr($productImage['name'], '..')) {
                array_push($errorList, "Invalid file name");
                $log->warn("Uploaded file name with .. in it (possible attack): " . print_r($productImage, true));
            }
            // TODO: check if file already exists, check maximum size of the file, dimensions of the image etc.
            $info = getimagesize($productImage["tmp_name"]);
            if ($info == FALSE) {
                array_push($errorList, "File doesn't look like a valid image");
            } else {
                if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/gif' || $info['mime'] == 'image/png') {
                    // image type is valid - all good
                } else {
                    array_push($errorList, "Image must be a JPG, GIF, or PNG only.");
                }
            }
        }
    } else { // no file uploaded
        if ($op == 'add') {
            array_push($errorList, "Image is required when creating new product");
        }
    }

    if ($errorList) {
        // 3. failed submission
        $app->render('price_addedit.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else {
        // 2. successful submission
        if ($productImage) {
            $sanitizedFileName = preg_replace('[^a-zA-Z0-9_\.-]', '_', $productImage['name']);
            $picPath = 'uploads/' . $sanitizedFileName;
            if (!move_uploaded_file($productImage['tmp_name'], $picPath)) {
                $log->err("Error moving uploaded file: " . print_r($productImage, true));
                $app->render('internal_error.html.twig');
                return;
            }
            // TODO: if EDITING and new file is uploaded we should delete the old one in uploads
            $values['picPath'] = "/" . $picPath;
        }
//check if product exists
        if ($id != -1) {
            // if ($store['userId'] == $_SESSION['user']['id']) {

            $storeRow = DB::queryFirstRow('SELECT * FROM stores WHERE name=%s', $storeName);
            $productRow = DB::queryFirstRow('SELECT * FROM products WHERE name=%s', $productName);
            $storeId = $storeRow['id'];
            $productId = $productRow['id'];
            DB::update('prices', array('storeId' => $storeId, 'productId' => $productId, 'price' => $price, 'onSpecial' => $onSpecial, 'quantity' => $quantity, 'unit' => $unit, 'userId' => $_SESSION['user']['id']), "id=%i", $id);
        } else {
            $product = DB::queryFirstRow('SELECT * FROM products WHERE name=%s', $productName);
            if (!$product) {
                $product = DB::insert('products', array(picPath => "/" . $picPath, 'name' => $productName, 'barcode' => $barcode, 'userId' => $_SESSION['user']['id']));
            }
            $productName = DB::queryFirstRow('SELECT * FROM products WHERE name=%s', $productName);
            $productId = $productName['id'];

            //check if store exists
            $store = DB::queryFirstRow('SELECT * FROM stores WHERE name=%s', $storeName);
            if (!$store) {
                $store = DB::insert('stores', array('name' => $storeName, 'userId' => $_SESSION['user']['id'], 'longitude' => $long, 'latitude' => $lat));
            }
            $storeName = DB::queryFirstRow('SELECT * FROM stores WHERE name=%s', $storeName);
            $storeId = $storeName['id'];
            

            DB::insert('prices', array('storeId' => $storeId, 'productId' => $productId, 'price' => $price, 'onSpecial' => $onSpecial, 'quantity' => $quantity, 'unit' => $unit, 'userId' => $_SESSION['user']['id']));
        }
        $app->render('price_addedit_success.html.twig', array('isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

//delete a price

$app->get('/price/delete/:id', function($id) use ($app) {
    $priceDelete = DB::queryFirstRow("SELECT * FROM prices WHERE id=%i", $id);
    if (!$_SESSION['user'] || $_SESSION['user']['id'] != $priceDelete['userId']) {
        $app->render('access_denied.html.twig');
        return;
    }

    $price = DB::queryFirstRow('SELECT * FROM prices WHERE id=%d', $id);
    if (!$price) {
        $app->render('admin_not_found.html.twig');
        return;
    }
    $app->render('price_delete.html.twig', array('p' => $product));
});

$app->post('/price/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->render('not_found.html.twig');
        return;
    }
    DB::delete('prices', "id=%i", $id);
    if (DB::affectedRows() == 0) {
        $app->render('not_found.html.twig');
    } else {
        $app->render('price_delete_success.html.twig');
    }
});

$app->get('/price/view/:id', function($id = -1) use($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    

    
    $priceview = DB::queryFirstRow("SELECT stores.name AS storeName, products.name AS productName,products.barcode as productBarcode,products.picPath as productImage,prices.id as priceId,storeId,productId,quantity,dateRegistered,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id LEFT JOIN products ON prices.productId = products.id WHERE prices.id = %i ORDER BY dateRegistered DESC LIMIT 30",$id);
    $allprices = DB::query("SELECT stores.name AS storeName,prices.id as priceId,storeId,productId,quantity,dateRegistered,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id WHERE productId = %i ORDER BY dateRegistered DESC",$priceview['productId']);
      $allprices2 = DB::query("SELECT stores.name AS storeName,prices.id as priceId,storeId,productId,quantity,dateRegistered,price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id WHERE productId = %i ORDER BY dateRegistered ASC",$priceview['productId']); 
    $app->render('price_view.html.twig', array('list' => $priceview,'allprices'=>$allprices,'allprices2'=>$allprices2));
    
})->conditions(array(
    'id' => '\d+'
));
