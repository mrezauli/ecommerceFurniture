<?php

include_once ("../../../vendor/autoload.php");

$_buy = new \App\admin\Products\Products();
$_buy->buy($_POST);