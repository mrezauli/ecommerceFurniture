<?php
session_start();

if (isset($_SESSION['user_name']) || isset($_SESSION['is_admin']) ) {

    session_unset();
    header('location:login.php');
}