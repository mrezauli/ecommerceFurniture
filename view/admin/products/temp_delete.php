<?php

include_once ("../../../vendor/autoload.php");

$_temp_delete = new \App\admin\Products\Products();

$_GET['uid'] = "'".$_GET['uid']."'";
$_temp_delete->temp_delete($_GET['uid']);