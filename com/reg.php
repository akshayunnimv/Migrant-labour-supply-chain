<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>

<?php
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
     $ta=$_POST['ta'];
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
    
    
    $log1=mysqli_query($dbcon,"select * from user_log where uid='$t6'");
if(mysqli_num_rows($log1)>0)
{
 header("location:reg.php?fail=1");   
}
 else {
    

    
     $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    
    $up1=$_FILES['myFile1']['name'];
    $count1=rand('1000000','9999999');
    $nfn1=$count1."".substr($up1,strrpos($up1,"."));
   
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//../img5//$nfn"))
    {
          if(move_uploaded_file($_FILES['myFile1']['tmp_name'],getcwd()."//../img6//$nfn1"))
    {
          
    $ins=mysqli_query($dbcon,"insert into staff_data values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$nfn','$nfn1','$usr','0','$ta')");
    
    if($ins>0)
    {
      $ins1=mysqli_query($dbcon,"insert into user_log values('','$t6','$t7','staff','0')");
        if($ins1>0)
        {
                header("location:reg.php?suss=1");
            }
    }
        }
 }
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
<title>Migrant Labourers  | Register :: Trinity Technologies</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Migrant Labourers Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../temp/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../temp/css/jquery-ui.css" />
<link href="../temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
				<h3>Staff Register </h3>
                                
                                <center>
                          <?php
                          if(isset($_GET['suss']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: green">REGISTRATION COMPLETE....Wait for Police Confirmation</h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
                      
                      <center>
                          <?php
                          if(isset($_GET['fail']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: red">EMAIL ALREADY EXIST</h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
                                <center>
                          <?php
                          if(isset($_GET['fail1']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: red">INCORRECT ACCOUNT NUMBER</h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
			</div>
	<div class="col-md-8 login-form-w3-agile">
			<form  method="post" enctype="multipart/form-data">
				
                               
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Name</span>
					<input type="text" name="t1" placeholder="Name" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Gender</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio"value="Male" name="t2"><i></i>Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio"value="Female" name="t2"><i></i>Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Age</span>
					
                                <input type="text"class="frm-field required" name="t3"  required="">
                                </div>
                            
                            
                               
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Experience</span>
					<input type="text" name="t4" placeholder="position in your company" required="">
				</div>
                               
                              <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Contact</span>
                                        <input type="text" name="t5" placeholder="Contact Info" required=""onkeyup="chkc(this.value)"><b id="o3"></b>
				</div>
				<div class="w3_form_body_grid">
					<span>Email</span>
                                        <input type="email" name="t6" placeholder="Email" required=""onkeyup="vem(this.value)"><b id="em"></b>
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Password</span>
					<input type="password" name="t7" placeholder="Password" required="">
				</div>
                               <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Aadhar Number</span>
                                        <input type="number" class="form-control" style="background-color: black" name="ta" placeholder="Enter aadhar number" required=""onkeyup="nme(this.value)"><b id="np3"></b>
				</div>
                               <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Photo</span>
					<input name="myFile" class="frm-field required" class="form-control" type="file"required="">
				</div>
                            <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Id Proof</span>
					<input name="myFile1" class="frm-field required" class="form-control" type="file"required="">
				</div>
                               
				<input name="sub1" type="submit" value="Sign Up">
			</form>
			
		</div>
            <div class="col-md-4 login-right-info">
                
                <img style="width: 100%;height: 240px" src="../pic/_111407227_whatsubject.jpg">
            </div>
            <div class="col-md-4 login-right-info right-info-find">
                
                <img style="width: 100%;height: 240px" src="../pic/download.jpg">
            </div>
            
	</div>
</div>
<!--login-inner-->
<!-- footer -->

<div class="footer-w3layouts">
				<div class="container">
				<div class="agile-copy">
					<p><p>© 2021 Migrant Labourers. All rights reserved | Design by <a href="#">Trinity Technologies</p></a></p>
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




<script src="../temp/js/SmoothScroll.min.js"></script>
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
<script type="text/javascript" src="../temp/js/move-top.js"></script>
<script type="text/javascript" src="../temp/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- Calendar -->
				<script src="../temp/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="../temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>