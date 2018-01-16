<?php

include_once ("../../../vendor/autoload.php");

$_GET['uid'] = "'".$_GET['uid']."'";
$_delete_image = new \App\Helpers();
$_delete_image->delete_image($_GET['uid']);

$_delete_products = new \App\admin\Products\Products();
$_delete_products->delete($_GET['uid']);
