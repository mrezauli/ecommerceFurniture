<?php

include_once "../../../vendor/autoload.php";
if (isset($_POST['sbmt'])) {

	$_sign_up = new \App\admin\Auth\Auth();

	$_sign_up->set($_POST)->store();

}
?>





<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>

    <base href="http://localhost/ecommerceFurnitureOOP/">
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
<script src="assets/admin/js/jquery-2.1.1.min.js"></script>
<!--icons-css-->
<link href="assets/admin/css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form action="" method="post">
					<input type="text" name="user_name" placeholder="Name" required="">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
                    <div class="text-center">
                        <label>Want to be a Contributor?</label>
                        <br>
                        <input type="radio" name="is_admin" value="0" class="lock" style="display: inline">Contributor
                    </div>
					<div class="forgot-top-grids">


						<div class="clearfix"> </div>
					</div>
                    <button name="sbmt" type="submit" class="btn btn-lg btn-success btn-block">Sign Up</button>
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="view/admin/auth/login.php"> Login here.</a></h4>

				</div>
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
		<script src="assets/admin/js/jquery.nicescroll.js"></script>
		<script src="assets/admin/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="assets/admin/js/bootstrap.js">
    $(document).ready(function() {
        $('.alert').delay(2000).fadeOut(1000, function() {
            $(this).alert('close');
        });
    });
</script>
<!-- mother grid end here-->
</body>
</html>




