<?php
include 'connection.php';
ob_start();
?>
 <?php

session_start();
if(isset($_POST['b1']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
$log=mysqli_query($dbcon,"select * from user_log where uid='$t1' and pwd='$t2'and st='1'");
if(mysqli_num_rows($log)>0)
{
$r=mysqli_fetch_row($log);
if($r[3]=="admin")
{
    $_SESSION['uid']=$t1;
    header("location:./admin/home.php");
    
}
if($r[3]=="comp")
{
    $_SESSION['uid']=$t1;
    header("location:./com/home.php");
}
if($r[3]=="usr")
{
    $_SESSION['uid']=$t1;
    header("location:./user/home.php");
}
if($r[3]=="staff")
{
    $_SESSION['uid']=$t1;
    header("location:./staff/home.php");
}
if($r[3]=="user")
{
    $_SESSION['uid']=$t1;
    header("location:./user/home.php");
}
if($r[3]=="police")
{
    $_SESSION['uid']=$t1;
    header("location:./police/home.php");
}
}
else
{
    echo '<script>alert("Incorrect Username/Password")</script>'; 
}
    

}
                                    ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Migrant Labourers  | Login :: Trinity Technologies</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Migrant Labourers Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="temp/css/font-awesome.css" rel="stylesheet"> 
<link href="temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<!--//fonts-->

</head>
<body>
<!--banner start here-->
<div class="banner-w3ls inner-banner-agileits" id="home">
	<div class="container">
		<!-- header -->
                 <?php
                 
                 include 'menu.php';
                 ?>
</div>			
</div>
<!--//home-->
<!--banner end here-->
<!-- breadcrumbs -->

<!-- //breadcrumbs -->
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>Login Now</h3>
			</div>
	<div class="col-md-8 login-form-w3-agile">
			 <form  method="post">
				<div class="w3_form_body_grid">
					<span>Name</span>
					<input type="email" name="t1" placeholder="Email" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Password</span>
					<input type="password" name="t2" placeholder="Password" required="">
				</div>
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<input type="submit"name="b1" value="Sign In">
			</form>
			
		</div>
		<div class="col-md-4 login-right-info">
			<h3 class="subhead-agileits">Why Join Migrant Labourers</h3>
			<p class="para-agileits-w3layouts" >Login to manage your account and details</p>
			
			<h5>Don't have an account?<i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
			<div class="sim-button button12"><a href="reg.php">Register</a></div>
		</div>
	</div>
</div>
<!--login-inner-->
<!-- footer -->



<div class="footer-w3layouts">
				<div class="container">
				<div class="agile-copy">
					<p>© 2021 Migrant Labourers. All rights reserved | Design by <a href="#">Trinity Technologies</p>
				</div>
				<div class="agileits-social">
					<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
<!--/footer -->

<!-- js -->
<script type='text/javascript' src='../temp/js/jquery-2.2.3.min.js'></script>



<script src="temp/js/SmoothScroll.min.js"></script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
	<!-- //for-Clients -->
	<!-- start-smoth-scrolling -->
<script type="text/javascript" src="temp/js/move-top.js"></script>
<script type="text/javascript" src="temp/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>