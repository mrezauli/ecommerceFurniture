<?php

include_once ("../../../vendor/autoload.php");

$_restore_student = new \App\admin\Products\Products();

$_GET['uid'] = "'".$_GET['uid']."'";
$_restore_student->restore($_GET['uid']);

