<?php

include_once ("../../../vendor/autoload.php");

use App\admin\Products\Products;

$_object = new Products();

//var_dump($_FILES);

$_img_real_name = $_FILES['Upload_Product_Image']['name'];
$_img_tmp_name = $_FILES['Upload_Product_Image']['tmp_name'];
$_img_extension = end(explode('.', $_img_real_name));
$_img_generated_name = substr(md5(time()), 0, 11);
$_POST['Upload_Product_Image'] = $_img_generated_name . '.' . $_img_extension;
move_uploaded_file($_img_tmp_name, '../../../assets/uploads/' . $_POST['Upload_Product_Image']);

$_object->set($_POST);

$_object->store();

