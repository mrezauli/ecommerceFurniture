<?php

include_once ("../../../vendor/autoload.php");




var_dump($_POST);
echo '<br>';
var_dump($_FILES);
echo '<br>';

$_POST['unique_id'] = "'".$_POST['unique_id']."'";


if ( $_FILES['Upload_Product_Image'] ['name'] != '') {
    \App\Helpers::upload_image();
    $_delete_image = new \App\Helpers();
    $_delete_image->delete_image($_POST['unique_id']);
}
else {
    $_POST['Upload_Product_Image'] = $_POST['Image_Name_Deletion'];
}

$_update_products = new \App\admin\Products\Products();
$_update_products->set($_POST);
$_update_products->update($_POST['unique_id']);


