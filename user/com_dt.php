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

$sel=mysqli_query($dbcon,"select * from com_data where em='$mid'");
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
<?php
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
  
    $date=date('Y-m-d'); 
         
    $ins=mysqli_query($dbcon,"insert into comp_rev values('','$usr','$mid','$t1','$date','0')");
    
    if($ins>0)
    {
      
                header("location:com_dt.php?mid=$mid");
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
        var uluru = {lat: <?php echo $r[11]?>, lng: <?php echo $r[12]?>};
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
  <style>
  
     
.widget-area.blank {
background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
-webkit-box-shadow: none;
-moz-box-shadow: none;
-ms-box-shadow: none;
-o-box-shadow: none;
box-shadow: none;
}

.widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload ul {
float: left;
list-style: none outside none;
margin: 0;
padding: 0 0 0 15px;
width: auto;
}
.status-upload ul > li {
float: left;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}



























































  </style>
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
                    <img style="width: 245px;height: 300px" src="../img3/<?php echo $r[9] ?>">
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>: <?php echo $r[1] ?></li>
				<li><span>HR</span>: <?php echo $r[2] ?></li>
				
				
				
				<li><span>Email</span>: <?php echo $r[6] ?></li>
				<li><span>Contact</span>: <?php echo $r[5] ?></li>
                                 <li><span>Amount</span>: <b><?php echo $r[4] ?> Rs/-(1 day Per head)</b></li>
                                <br/>
                                <li><a href="../img4/<?php echo $r[10] ?>">Download Info <div class="fa fa-download"></div></a> &nbsp;&nbsp;   <a href="req.php?mid=<?php echo $mid ?>">Send Job Request <div class="fa fa-forward"></div></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="about-person">
			<h6>About our Company:</h6>
			<p class="para-agileits-w3layouts"><span>Hi!, we are <?php echo $r[1] ?> </span><?php echo $r[3]?></p>
                       
                </div>
	</div>
		<div id="horizontalTab">
						<ul class="resp-tabs-list">
						<li>
							<h6>Location</h6>
						</li>
						<li>
							<h6>Staff</h6>
						</li>
						<li>
							<h6>Jobs</h6>
						</li>
						<li>
							<h6>Review</h6>
						</li>
						</ul>
						<div class="resp-tabs-container">
						<div class="tab1">
							
                                                   <div id="map" style="width: 100%; height: 500px;"></div>
                                                
                                                </div>
						
                                                    <div class="tab2">
                                                       <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from staff_data where st='1' and cid='$mid'");
                                                        while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                        ?>   
	<div class="matches-main-agileinfo">
		<div class="col-md-6 profile1"> 
                    <img style="width: 245px;height: 300px" src="../img5/<?php echo $r_gal[8] ?>">
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>: <?php echo $r_gal[1] ?></li>
				<li><span>Gender</span>: <?php echo $r_gal[2] ?></li>
				<li><span>Age</span>: <?php echo $r_gal[3] ?></li>
                                <li><span>Position</span>: <?php echo $r_gal[4] ?></li>
				
				
				<li><span>Email</span>: <?php echo $r_gal[6] ?></li>
				<li><span>Contact</span>: <?php echo $r_gal[5] ?></li>
                                  <br/>
                                  <li><a target="_blank"href="../img6/<?php echo $r_gal[9] ?>">Download Info <div class="fa fa-download"></div></a></li>
                                </ul>
		</div>
		<div class="clearfix"> </div>
		<div class="about-person">
			<h6>About our Staff:</h6>
			
                        <div class="sim-button button12"><a href="staff_dt.php?mid=<?php echo $r_gal[6] ?>">Read More</a></div>
		</div>
	</div>
	<?php
                                                            }
                                                            ?>
	
                                                        
                                                        
                                                    </div>
                                                    <div class="tab3">
                                                        
                                                        <?php
                        
                                                        $sel1=mysqli_query($dbcon,"select * from req where st='1' and cid='$mid'  order by id desc");
                                                        while($r1=mysqli_fetch_row($sel1))
                                                        {
                                                                $sel_gal=mysqli_query($dbcon,"select * from user_data where em='$r1[9]'");
                                                        
                                                       $r_gal=mysqli_fetch_row($sel_gal);
                                                            
                                                        ?>   
	<div class="matches-main-agileinfo">
		<div class="col-md-6 profile1"> 
                    <img style="width: 245px;height: 325px" src="../img1/<?php echo $r_gal[6] ?>">
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
                          <li><span>from</span>: <?php echo $r_gal[1] ?></li>
                            <li><span>Job</span>: <?php echo $r1[1] ?></li>
                                <li><span>Ending Date</span>: <?php echo $r1[3] ?></li>
                                <li><span>No of staffs</span>: <?php echo $r1[4] ?></li>
                                <li><span>Total Days</span>: <?php echo $r1[5] ?> days</li>
				<li><span>My Fee</span>: <?php echo $r1[6] ?> Rs/- (1 day per head)</li>
                                <li><span>Staffs Assigned</span>:
                        
                        <?php 
                        $sel2=mysqli_query($dbcon,"select * from assi where rid='$r1[0]'");
    $r2=  mysqli_num_rows($sel2);
                        echo"$r2";
                        ?>
                        </li>
                                <li><span>Total Amount</span>: <b><?php echo $r1[7] ?> Rs/-</b></li>
			</ul>
                   
		</div>
		<div class="clearfix"> </div>
		<div class="about-person">
                    <div class="sim-button button12"><a href="staff1.php?mid=<?php echo $r1[0] ?>">Assigned Workers</a></div>
		</div>
	</div>
	<?php
                                                            }
                                                            ?>
                                                    </div>
                                                    <div class="tab4">
                                                        
                                                        
                                                        
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="page-header">Comments</h2>
        <section class="comment-list">
          
          
<div class="container">
	<div class="row">
	
	</div>
    
    <div class="row">
    
    <div class="col-md-8">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
                                                                    <form method="post">
										<textarea name="t1" placeholder="Post Your Review" ></textarea>
										
										<br/>
										<button name="sub1" type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Post Comment</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
    </div>
</div>
 <br/>
          <?php
                
            $sel_p=mysqli_query($dbcon,"select * from comp_rev where cid='$mid' order by id desc");
            while($r_p=mysqli_fetch_row($sel_p))
            {
                $pr=mysqli_query($dbcon,"select * from user_data where em='$r_p[1]'");
    $pr1=mysqli_fetch_row($pr);
                ?>
 
 <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                  <img class="img-responsive" style="width: 100%;height: 100px" src="../img1/<?php echo $pr1[6] ?>" />
              
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> <?php echo $pr1[1] ?></div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo $r_p[4] ?></time>
                  </header>
                  <div class="comment-post">
                    <p>
                      <?php echo $r_p[3] ?>
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
          </article>
          
          
       <?php
       
       
            }
            ?>
          
        </section>
    </div>
  </div>
</div>

                                                        
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