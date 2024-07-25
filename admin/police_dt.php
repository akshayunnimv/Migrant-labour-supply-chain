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

$mid=$_GET['mid'];

$sel=mysqli_query($dbcon,"select * from police where em='$mid'");
    $r=mysqli_fetch_row($sel);
    
?>
<?php
if(isset($_GET['upd']))
{
    $uid=$_GET['uid'];  
    $upd=$_GET['upd'];
    $upd1=mysqli_query($dbcon,"update com_data set st='1' where id='$upd'");
    
   
    if($upd1>0)
    {
        $upd2=mysqli_query($dbcon,"update user_log set st='1'where uid='$uid'");
    
   
    if($upd2>0)
    {
       header("location:enq1.php");
}
}                         
                            
}

?>
<?php
if(isset($_GET['upd']))
{
    $uid=$_GET['uid'];  
    $upd=$_GET['del'];
    $upd1=mysqli_query($dbcon,"update com_data set st='2' where id='$upd'");
    
   
    if($upd1>0)
    {
        $upd2=mysqli_query($dbcon,"update user_log set st='2'where uid='$uid'");
    
   
    if($upd2>0)
    {
       header("location:enq1.php");
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
<title>Migrant Labourers  | Single :: Trinity Technologies</title>
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
<link href="../temp/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="../temp/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<!--//fonts-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
    <script type="text/javascript">
    
    
    
    
   function initMap() {
        var uluru = {lat: <?php echo $r[8]?>, lng: <?php echo $r[9]?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    
    
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=initMap">
    </script>
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
<div class="matches elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
		<h3>Profile</h3>
	</div>
	<div class="matches-main-agileinfo">
		<div class="col-md-6 profile1"> 
                    <img style="width: 245px;height: 300px" src="../img7/<?php echo $r[7] ?>">
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>: <?php echo $r[1] ?></li>
				<li><span>SI</span>: <?php echo $r[2] ?></li>
				
				
				
				<li><span>Email</span>: <?php echo $r[6] ?></li>
				<li><span>Contact</span>: <?php echo $r[5] ?></li>
                                 <br/>
<!--                                <li><a href="../img4/<?php echo $r[10] ?>">Download Info <div class="fa fa-download"></div></a></li>-->
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="about-person">
			<h6>About our Station:</h6>
			<p class="para-agileits-w3layouts"><span>Hi!, we are <?php echo $r[1] ?> </span> Address:<?php echo $r[3]?></p>
                       
                </div>
	</div>
		<div id="horizontalTab">
						<ul class="resp-tabs-list">
						<li>
							<h6>Location</h6>
						</li>
						
						</ul>
						<div class="resp-tabs-container">
						<div class="tab1">
							
                                                   <div id="map" style="width: 100%; height: 500px;"></div>
                                                
                                                </div>
						
                                                    <div class="tab2">
                                                        <img src="../img1/1280426.jpg">
                                                        
                                                        
                                                    </div>
						<div class="tab3">
							<p class="para-agileits-w3layouts"><span>Location : </span>253 Church St, New York, NY 10013, USA</p>
							<p class="para-agileits-w3layouts"><span>Call Us : </span>077-961-5426</p>
							<p class="para-agileits-w3layouts"><span>Email : </span><a href="../temp/mailto:info@example.com">info@example.com</a></p>
							<iframe src="../temp/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.0051536537085!2d-74.00760038479508!3d40.7179030451917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a2016ad0821%3A0xa6bb46d566a740b7!2sKori+Tribeca!5e0!3m2!1sen!2sin!4v1490440032827"></iframe>
						</div>
						<div class="tab4">
							<p class="para-agileits-w3layouts"><span>Location : </span>Sacramento, Welwyn, UK</p>
							<p class="para-agileits-w3layouts"><span>Call Us : </span>505-792-2654</p>
							<p class="para-agileits-w3layouts"><span>Email : </span><a href="../temp/mailto:info@example.com">info@example.com</a></p>
							<iframe src="../temp/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39445.20117152928!2d-0.23465869969804293!3d51.83675868651679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487624b0caefa34f%3A0x246a752af1fed599!2sWelwyn%2C+UK!5e0!3m2!1sen!2sin!4v1490439907190"></iframe>
						</div>
						</div>
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
<!-- script for responsive tabs -->						
<script src="../temp/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!-- script for responsive tabs -->		


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
	
	
	<a href="../temp/#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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
<script type="text/javascript" src="../temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>