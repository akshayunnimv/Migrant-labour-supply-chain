<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];

$sel=mysqli_query($dbcon,"select * from req where id='$mid'");
    $r=mysqli_fetch_row($sel);
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
if(isset($_GET['upd']))
{
    $mid=$_GET['mid'];
    $upd=$_GET['upd'];
    
    $sel=mysqli_query($dbcon,"select * from req where id='$mid'");
    $r=mysqli_fetch_row($sel);
    
    $sel1=mysqli_query($dbcon,"select * from assi where rid='$mid'");
    $r1=  mysqli_num_rows($sel1);
    if($r1 >= $r[4])
    {
     header("location:staff1.php?mid=$mid&fail=1");   
    }
 else {
        
    
    $ins1=mysqli_query($dbcon,"insert into assi values('','$mid','$r[8]','$upd','$usr','0')");
        if($ins1>0)
        {
                header("location:staff1.php?mid=$mid");
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
<title>Migrant Labourers  | Matches :: Trinity Technologies</title>
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
		<h3>Assign Staffs</h3>
                <center>
                          <?php
                          if(isset($_GET['fail']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: red">Maximum Staff that can be assigned is <?php echo $r[4] ?></h4>
                          
                          
                          <?php
                          }
                          ?>
                      </center>
	</div>
         <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from staff_data where st='1' and cid='$usr'");
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
                                <li><span>Experience</span>: <?php echo $r_gal[4] ?></li>
				
				
				<li><span>Email</span>: <?php echo $r_gal[6] ?></li>
				<li><span>Contact</span>: <?php echo $r_gal[5] ?></li>
                                </ul>
                    <br/>
                    <?php
                    
                    $log=mysqli_query($dbcon,"select * from assi where rid='$mid' and sid='$r_gal[6]'");
if(mysqli_num_rows($log)>0)
{
                    ?>
                    
                    <div class="btn btn-warning"><b style="color: white">Assigned</b></div>
                    
                    <?php
}
 else {
    
?>
                    <div class="btn btn-success"><a href="staff1.php?upd=<?php echo $r_gal[6] ?>&mid=<?php echo $mid ?>"><b style="color: white">Assign</b></a></div>
		<?php
 }
 ?>
		</div>
		<div class="clearfix"> </div>
<!--		<div class="about-person">
			<h6>About our company:</h6>
			<p class="para-agileits-w3layouts"><span>Hi!, we are <?php echo $r_gal[1] ?> </span><?php echo substr($r_gal[3],0,200)?>.....</p>
                        <div class="sim-button button12"><a href="com_dt.php?mid=<?php echo $r_gal[6] ?>">Read More</a></div>
		</div>-->
	</div>
	<?php
                                                            }
                                                            ?>
	
	
	</div>
</div>
<!--login-inner-->
<!-- footer -->


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
<script type="text/javascript" src="../temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>