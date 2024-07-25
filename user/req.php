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
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $start = strtotime("$t2");
$end = strtotime("$t3");

$dy = ceil(abs($end - $start) / 86400);

  $dy1=$dy+1;  
  $amt=$r[4];
  $tot=$amt*$dy1;
  $tot1=$tot*$t4;
        
    $ins=mysqli_query($dbcon,"insert into req values('','$t1','$t2','$t3','$t4','$dy1','$amt','$tot1','$mid','$usr','3')");
    $id=mysqli_insert_id($dbcon);
    
    if($ins>0)
    {
      
                header("location:req.php?mid=$mid&req=$id");
            }
    }
        
 
        ?>
<?php
if(isset($_GET['upd']))
{
    $uid=$_GET['uid'];  
    $upd=$_GET['upd'];
    $upd1=mysqli_query($dbcon,"update req set st='0' where id='$upd'");
    
   
    if($upd1>0)
    {
        
       header("location:com.php?mid=$uid");
}
}                         
                            


?>
<?php
if(isset($_GET['del']))
{
    $uid=$_GET['uid'];  
    $upd=$_GET['del'];
    $upd1=mysqli_query($dbcon,"delete from req where id='$upd'");
    
   
    if($upd1>0)
    {
        
       header("location:com.php?mid=$uid");
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
<script type="text/javascript">
    function nme(b2)
{
var k5=b2.length;
var ch2=/([a-z])$/;
if(ch2.test(b2)==false)
{
document.getElementById("np3").innerHTML="<font color='red'>*Only Alphabets*</font>";
$("#btn").hide();
return false;
}

else
{
  document.getElementById("np3").innerHTML="";  
  $("#btn").show();
}
}
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
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
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>Send Request</h3>
                                
                                <center>
                          <?php
                          if(isset($_GET['suss']))
                          {
                          
                          ?>
                          <br/>
                          <h4 style="color: green">REGISTRATION COMPLETE....PLEASE WAIT FOR CONFIRMATION</h4>
                          
                          
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
			<form method="post" enctype="multipart/form-data">
                        <table class="table table-bordered"style="background-color: lightsteelblue">
                                            <tr>
                                                <td>Subject</td>
                                                <td><input type="text"   name="t1"required="" class="form-control" /></td>
                                            </tr> 
                                            <tr>
                                                <td>Starting Date</td>
                                                <td><input type="date"   name="t2"required="" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td>Ending Date</td>
                                                <td><input type="date"   name="t3"required="" class="form-control" /></td>
                                            </tr> 
                                            <tr>
                                                <td>Staffs Assigned</td>
                                                <td><input type="number"   name="t4"required="" class="form-control" /></td>
                                            </tr> 
                                                                                       
                                            <tr>
                                                <td colspan="2"><center>
                                                <input type="submit" name="sub1" value="Send Request" class="bt btn-success" />
                                            
                                            
                                            
                                            </center></td>
                                            </tr>  
                                        </table>
                                        </form>
			
		</div>
            <div class="col-md-4">
            
            
                <?php
                if(isset($_GET['req']))
                {
                    
                  $req=$_GET['req'];

$sel1=mysqli_query($dbcon,"select * from req where id='$req'");
    $r1=mysqli_fetch_row($sel1);  
                ?>
			<h3>Payment Details</h3>
			<ul>
				<li><span>Starting Date</span>: <?php echo $r1[2] ?></li>
                                <li><span>Ending Date</span>: <?php echo $r1[3] ?></li>
                                <li><span>No of staffs</span>: <?php echo $r1[4] ?></li>
                                <li><span>Total Days</span>: <?php echo $r1[5] ?> days</li>
				<li><span>Fee</span>: <?php echo $r1[6] ?> Rs/- (1 day per head)</li>
                                <li><span>Total Amount</span>: <b><?php echo $r1[7] ?> Rs/-</b></li>
			</ul>
                        <br/>
                        <div class="btn btn-success"><a href="req.php?upd=<?php echo $r1[0] ?>&uid=<?php echo $mid ?>"><b style="color: white">Approve</b></a></div>&nbsp;&nbsp;<div class="btn btn-danger"><a href="req.php?del=<?php echo $r1[0] ?>&uid=<?php echo $mid ?>"><b style="color: white">Reject</b></a></div>
		
                        
                        <?php
                }
                else
                {
                ?>
                        <img style="width: 100%;height: 500px" src="../pic/98649add72e05e3cc1b8ae0e6f553c8e.gif">       
                        <?php
                }
                ?>
		
            
            
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