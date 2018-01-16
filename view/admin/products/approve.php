<?php

include_once ("../../../vendor/autoload.php");

$_approve_products = new \App\admin\Products\Products();
$_GET['uid'] = "'".$_GET['uid']."'";
$_approve_products->approve($_GET['uid']);