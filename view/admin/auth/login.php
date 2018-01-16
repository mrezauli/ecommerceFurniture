<?php

if (!isset($_SESSION)) {
    session_start();
}
include_once ("../../../vendor/autoload.php");
if (isset($_POST['sbmt'])) {

    $_POST['user_name'] = $_POST['user_name_or_email'];
    $_POST['email'] = $_POST['user_name_or_email'];
    $_user_login = new \App\admin\Auth\Auth();
    $_user_login->set($_POST)->login();
}

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>

    <base href="http://localhost/projectsDoneOnPHP/ecommerceFurniture/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="assets/admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="assets/admin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="assets/admin/css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">
        <div style="position: fixed; z-index: 111; right: 30px">
            <?php


            if (isset($_SESSION['register'])) {
                echo "<div class='alert alert-success'>" . $_SESSION['register']. "</div>";
                $_SESSION['register'] = null;
            }


            ?>
        </div>
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form action="" method="post">
					<input type="text" name="user_name_or_email" placeholder="Email or User Name" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="text-center">
                        <label>Is Admin or Contributor?</label>
                        <br>
                        <input type="radio" name="is_admin" value="1" class="lock" style="display: inline" >Admin
                        <input type="radio" name="is_admin" value="0" class="lock" style="display: inline">Contributor
                    </div>
					<div class="forgot-top-grids">
						
						<div class="clearfix"> </div>
					</div>
                    <button name="sbmt" type="submit" class="btn btn-lg btn-success btn-block">Login</button>
					<h3>Not a member?<a href="view/admin/auth/signup.php"> Sign up now</a></h3>
				</form>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
