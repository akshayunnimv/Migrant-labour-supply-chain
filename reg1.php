<?php
ob_start();
include 'connection.php';

?>

<?php
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
    $t8=$_POST['t8'];
     $la=$_POST['la'];
    $lo=$_POST['lo'];
    $log1=mysqli_query($dbcon,"select * from user_log where uid='$t6'");
if(mysqli_num_rows($log1)>0)
{
 header("location:reg1.php?fail=1");   
}
 else {
    

    $log=mysqli_query($dbcon,"select * from account_bank where account_no='$t8' ");
if(mysqli_num_rows($log)>0)
{
    $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    
    $up1=$_FILES['myFile1']['name'];
    $count1=rand('1000000','9999999');
    $nfn1=$count1."".substr($up1,strrpos($up1,"."));
   
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img3//$nfn"))
    {
          if(move_uploaded_file($_FILES['myFile1']['tmp_name'],getcwd()."//img4//$nfn1"))
    {
    $ins=mysqli_query($dbcon,"insert into com_data values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$nfn','$nfn1','$la','$lo','0')");
    
    if($ins>0)
    {
      $ins1=mysqli_query($dbcon,"insert into user_log values('','$t6','$t7','comp','0')");
        if($ins1>0)
        {
                header("location:reg1.php?suss=1");
            }
    }
        }
 }
}
 else {
   header("location:reg1.php?fail1=1"); 
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
<link href="temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="temp/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="temp/css/jquery-ui.css" />
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
				<h3>Agency Register</h3>
                                
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
			<form  method="post" enctype="multipart/form-data">
				
                               
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Name</span>
					<input type="text" name="t1" placeholder="Agency Name" required="">
				</div>
				
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>HR</span>
					<input type="text" name="t2" placeholder="HR Name" required="">
				</div>
                            
                            <div class="w3_form_body_grid w3_form_body_grid1">
					<span>About Us</span>
					
                                        <textarea name="t3" class="frm-field required"></textarea>
                                </div>
				
                               <div class="w3_form_body_grid">
					<span>Location</span>
                                       Search and double click on the map to get Location Details
                    <input id="pac-input"  type="text" placeholder="Search Your Location...">
                    
				</div>
                               <div class="w3_form_body_grid">
					<span>Latitude</span>
                                         <input type="text" name="la"id="lat"placeholder="Double Click on the map" value="">
				</div>
                               <div class="w3_form_body_grid">
					<span>Longitude</span>
                                         <input type="text" name="lo" placeholder="Double Click on the map" id="lng" value="">
				</div>
				<div class="w3_form_body_grid w3_form_body_grid1">
					<span>Price</span>
					<input type="text" name="t4" placeholder="One day per head" required="">
				</div>
                               
                               <div class="w3_form_body_grid">
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
                               <div class="w3_form_body_grid">
					<span>Account no</span>
                                        <input class="form-control" name="t8"style="background-color: black" type="number" placeholder="Your Account number" required="">
				</div>
                            
                               <div class="w3_form_body_grid w3_form_body_grid1">
					<span>Company Photo</span>
					<input name="myFile" class="frm-field required" class="form-control" type="file"required="">
				</div>
                               <div class="w3_form_body_grid w3_form_body_grid1">
					<span>License</span>
					<input name="myFile1" class="frm-field required" class="form-control" type="file"required="">
				</div>
				<input name="sub1" type="submit" value="Sign Up">
			</form>
			
		</div>
            <div class="col-md-4">
                
                
            <center><p><b>Double click on the map to get more accuracy</b></p></center>
            <div id="map" style="width: 100%; height: 900px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&libraries=places&callback=initAutocomplete"
         async defer></script>
        
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
<!-- Calendar -->
				<script src="temp/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="temp/js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>