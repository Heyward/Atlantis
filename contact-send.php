<!DOCTYPE html> 
<html><head>
<meta charset="utf-8">
<title>Rodin | jQuery Mobile Theme</title>
<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

<!-- Styles -->
<link rel="stylesheet" href="assets/css/theme-switch.css" type="text/css"> <!--Theme Switcher-->  
<!-- / Styles -->

<!-- Scripts -->
<script src="assets/js/jquery.1.7.1.min.js"></script>
<script src="assets/js/jquery.mobile-1.1.0.min.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/jquery.pngFix.js"></script>
<script src="assets/js/custom.js"></script>
<!-- / Scripts -->

<!-- Menu -->
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
<script src="assets/js/jquery.flexslider.js"></script>
<script>
$(document).ready(function() {
	// For Menu
	$('.flexmenu').flexslider({
		animation: "slide",
		animationLoop: false,
		controlNav: false, 
		directionNav: true, 
		slideshow: false,
		animationDuration: 300,
		itemWidth: 68,
		itemMargin: 0,
		minItems: 4,
		maxItems: 20
    });
		
});
</script>
<!-- / Menu -->

</head> 
<body>

<!-- Main Container -->
<div data-role="page" data-theme="a" id="main">

    <!-- Header -->
     <div data-role="header" class="header-container" >
   		<div class="header-title"></div>
		<!-- Home link begin -->
         <div class="home-container">
            <a href="index.html" class="sb small House"></a>
         </div>
         <!-- Home link end -->
     </div>
	<!-- Header End -->
     
    <!-- Photo -->     
    <div class="sub-photo-container">
      <div class="sub-photo">
    	<img src="assets/images/Demo/Slide/subpages/triworks_abstract9.jpg" alt="" />
	  </div>
    </div>
    <!-- / Photo -->
      
      
    <!-- Main Menu -->
    <div class="menu-container"> 
     <div class="flexmenu carousel1">
      <ul class="slides">
      	<li><a href="index.html" data-ajax="false" class="sb House"><span>Home</span></a></li>
        <li><a href="about.html" data-ajax="false" class="sb Group"><span>About Us</span></a></li>
        <li><a href="blog.html" data-ajax="false" class="sb Chat"><span>Blog</span></a></li>
        <li><a href="services.html" data-ajax="false" class="sb Indexcards"><span>Services</span></a></li>
        <li><a href="gallery.html" data-ajax="false" class="sb Landscape"><span>Gallery</span></a></li>
        <li><a href="contact.html" data-ajax="false" class="sb Envelope"><span>Contact</span></a></li>
        <li></li>        
      </ul>	
    </div>
   </div>
    <!-- /Main Menu -->
     <div class="clear"></div>
    <!-- Content -->
    <div data-role="content">
    	<!-- Collapset Form Block -->
        <div data-role="collapsible-set">
           
          <div data-role="collapsible" data-collapsed="false">
            <h3>Contact Information</h3>
            <p>Address:<br>
			Phone:<br>
			GSM:<br>
			Email:
            </p>
          </div>
          
          <div data-role="collapsible" data-collapsed="false">
            <h3>Contact Form</h3>
            <!-- Contact Form -->
            <div class="subcontainer">
                <?php 
				$toemail = 'test@youremail.com'; // To Email Address
				$name = $_POST['name']; // Name Field
				$email = $_POST['email']; // Email Field
				$message = $_POST['message']; // Message Field
				if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
					echo '<div class="cmessage" >Your email was sent successfully.</div>'; // Send succesfull message 
				} else {
					echo '<div class="cmessage">There was a problem sending your email.</div>'; // Send Error Message
				}
				?>
            </div>
            <!-- / Contact Form -->
          </div>
          
        </div>
        <!-- Collapsed From Block End -->
        
    </div>
    <!-- Content End -->
   	<div class="clear"></div>
    <!-- If you want to use your mobile project copy / paste this (FOOTER) -->
	<div data-role="footer" class="nav-glyphish">
    
    	<div data-role="navbar" class="nav-glyphish" data-grid="c">
		<ul>
			<li><a href="blog.html" class="iconsub-white-Idcard" data-icon="custom">Blog</a></li>
			<li><a href="mailto:email@somewhere.com" class="iconsub-white-Envelope" data-icon="custom">Email</a></li>
			<li><a href="tel:+900000000" class="iconsub-white-Phone" data-icon="custom">Phone</a></li>
			<li><a href="index.html" class="iconsub-white-House" data-icon="custom">Home</a></li>
		</ul>
		</div>
        
	</div>
    <!-- end -->
 
    
</div>
<!-- / Main Container -->
</body>
</html>