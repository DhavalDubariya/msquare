<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from 204.48.28.144/html_demos/zap/animation-version/contact_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 13:42:44 GMT -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<?php
  include_once 'parts/css.php';
?>
</head>
<body>
<!-- LOADER ===========================================-->
<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="images/logo-dark.png" alt="">      
      <p class="font-crimson text-center">Please Wait...</p>
      <div class="loading">
      	<div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
      </div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap"> 
  
  <!-- Header -->
<?php
  include_once 'parts/header.php';
?>

  <!-- End Header --> 
  
  <!-- Content -->
  <div id="content">
    <section class="sub-banner animated fadeIn" style="background:url(images/bg/contact-bg.jpg) fixed no-repeat">
      <div class="container">
        <div class="position-center-center">
          <h2>CONTACT US</h2>
          
          <!--======= Breadcrumb =========-->
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">CONTACT US</li>
          </ol>
        </div>
      </div>
    </section>
    
    <!-- Conatct Pages  -->
    <section>
      <div class="container">
        <div class="row padding-top-80 padding-bottom-80"> 
          <!-- Phone Number  -->
          <div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-xlarge dark-text">
              <div class="ib-icon"> <i class="fa fa-mobile text-primary"></i> </div>
              <div class="ib-info text-dark">
                <p>+61 3 8376 6284</p>
                <p>+61 3 8376 6284</p>
              </div>
            </div>
          </div>
          
          <!-- Address -->
          <div class="col-md-4 animate fadeInUp" data-wow-delay="0.6s">
            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
              <div class="ib-icon"> <i class="fa fa-map-marker text-primary"></i> </div>
              <div class="ib-info text-dark">
                <p>PO Box 21177</p>
                <p>Litte Lonsdale St, Melbourne</p>
                <p>Victoria 8011 Australia</p>
              </div>
            </div>
          </div>
          
          <!-- Email  -->
          <div class="col-md-4 animate fadeInUp" data-wow-delay="0.8s">
            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
              <div class="ib-icon"> <i class="fa fa-envelope-o text-primary"></i> </div>
              <div class="ib-info text-dark">
                <p class="no-margin-bottom"><a href="#." class="text-dark">support@yourcompany.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- MAP  -->
      <div class="contact style-2 animate fadeInUp" data-wow-delay="0.4s">
        <div id="map"></div>
      </div>
      
      <!-- Contact  -->
      <div class="contact style-3 light-border padding-top-40 padding-bottom-80 animate fadeInUp" data-wow-delay="0.4s">
        <div class="container"> 
          
          <!-- Form  -->
          <div class="contact-right padding-top-30 padding-left-30"> 
            <!-- Success Msg -->
            <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
            
            <!-- FORM -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <ul class="row">
                <li class="col-sm-4">
                  <label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="NAME">
                  </label>
                </li>
                <li class="col-sm-4">
                  <label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="EMAIL">
                  </label>
                </li>
                <li class="col-sm-4">
                  <label>
                    <input type="text" class="form-control" name="company" id="company" placeholder="SUBJECT">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="CONTENT..."></textarea>
                  </label>
                </li>
                <li class="col-sm-12">
                  <button type="submit"  value="submit" id="btn_submit" onClick="proceed();">SEND ME</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- End Content --> 

<!-- Footer -->
<footer id="footer">
  <div class="footer-wrapper"> 
    
    <!-- Footer Top -->
    <div class="footer-top">
      <div class="footer-top-wrapper">
        <div class="container">
          <div class="row"> 
            <!-- About Block -->
            <div class="col-md-4">
              <div class="block block-about">
                <h3 class="block-title no-underline"><span class="text-primary">Creative Agency from London - UK</span></h3>
                <div class="block-content">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <img class="footer-logo" src="images/footer/footer_logo_1.png" alt="" /> </div>
              </div>
            </div>
            <!-- End About Block --> 
            
            <!-- Footer Links Block -->
            <div class="col-md-2">
              <div class="block block-links">
                <h3 class="block-title"><span>Info</span></h3>
                <div class="block-content">
                  <ul>
                    <li><a href="#.">Theme Features</a></li>
                    <li><a href="#.">Page Builder</a></li>
                    <li><a href="#.">Privacy Policy</a></li>
                    <li><a href="#.">Shop Rules</a></li>
                    <li><a href="#.">Services</a></li>
                    <li><a href="#.">Gallery Layout</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Footer Links Block --> 
            
            <!-- Twitter Widget Block -->
            <div class="col-md-3">
              <div class="block block-twitter-widget">
                <h3 class="block-title"><span>Twitter Widget</span></h3>
                <div class="block-content">
                  <div class="twitter-item">
                    <div class="twitter-content"> Looking for an awesome CREATIVE WordPress Theme? Esquise was updated and optimized to run even better. Find it here: <a href="http://t.co/0WWEMQEQ48" target="_blank">http://t.co/0WWEMQEQ48</a> </div>
                    <div class="twitter-context"> <i class="fa fa-twitter"></i><span class="twitter-date">01 day ago</span> </div>
                  </div>
                  <div class="twitter-item">
                    <div class="twitter-content"> It is a long established fact that a reader will be distracted by the readable . Find it here: <a href="http://t.co/0WWEMQEQ48" target="_blank">http://t.co/0WWEMQEQ48</a> </div>
                    <div class="twitter-context"> <i class="fa fa-twitter"></i><span class="twitter-date">02 days ago</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Twitter Widget Block --> 
            
            <!-- Instagram Widget Block -->
            <div class="col-md-3">
              <div class="block block-instagram-widget">
                <h3 class="block-title"><span>Instagram Widget</span></h3>
                <ul >
                  <li> <a href="#.."> <img src="images/footer/footer_instagram_01.png" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="#.."> <img src="images/footer/footer_instagram_02.png" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="#.."> <img src="images/footer/footer_instagram_03.png" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="#.."> <img src="images/footer/footer_instagram_04.png" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="#.."> <img src="images/footer/footer_instagram_05.png" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                  <li> <a href="#.."> <img src="images/footer/footer_instagram_06.png" alt="" /> <span class="overlay"><i class="fa fa-search"></i></span> </a> </li>
                </ul>
              </div>
            </div>
            <!-- End Instagram Widget Block --> 
            
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Top --> 
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="footer-bottom-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-6 copyright">
              <p>&copy; 2015 ZAP Creative HTML Template. Designed By wpelite.</p>
            </div>
            <div class="col-md-6 social-links">
              <ul class="right">
                <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#."><i class="fa fa-behance"></i></a></li>
                <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Bottom --> 
  </div>
</footer>
<!-- End Footer --> 
  
  <!-- GO TO TOP --> 
  	<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 

<!-- End Page Wrapper --> 
<!--Style Switcher===========================================-->
<div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="ion-gear-a" ></i></a>
  <div class="theme-colours">
    <p class="font-crimson font-italic">Choose Colour style</p>
    <ul>
      <li><a href="#." class="blue" id="blue"></a></li>
      <li><a href="#." class="green" id="green"></a></li>
      <li><a href="#." class="red" id="red"></a></li>
      <li><a href="#." class="yellow" id="yellow"></a></li>
      <li><a href="#." class="brown" id="brown"></a></li>
      <li><a href="#." class="cyan" id="cyan"></a></li>
      <li><a href="#." class="purple" id="purple"></a></li>
      <li><a href="#." class="sky-blue" id="sky-blue"></a></li>
      <li><a href="#." class="gray" id="gray"></a></li>
      <li><a href="#." class="peter-river" id="peter-river"></a></li>
      <li><a href="#." class="nephritis" id="nephritis"></a></li>
      <li><a href="#." class="amethyst" id="amethyst"></a></li>
      <li><a href="#." class="wet-asphalt" id="wet-asphalt"></a></li>
      <li><a href="#." class="night-shade" id="night-shade"></a></li>
      <li><a href="#." class="sun-flowers" id="sun-flowers"></a></li>
      <li><a href="#." class="orange" id="orange"></a></li>
      <li><a href="#." class="carrot" id="carrot"></a></li>
      <li><a href="#." class="alizarin" id="alizarin"></a></li>
      <li><a href="#." class="sliver" id="sliver"></a></li>
      <li><a href="#." class="green-sea" id="green-sea"></a></li>
    </ul>
    <div class="layouts no-padding">
      <p class="font-crimson font-italic margin-top-20">Layout Style</p>
      <a href="#." id="boxed">BOX LAYOUT</a> <a href="#." id="wide">WIDE LAYOUT</a> </div>
  </div>
</div>

<!-- JavaScripts --> 
<script src="js/vendors/jquery/jquery.min.js"></script> 
<script src="js/vendors/wow.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script> 
<script src="js/vendors/own-menu.js"></script> 
<script src="js/vendors/flexslider/jquery.flexslider-min.js"></script> 
<script src="js/vendors/jquery.countTo.js"></script> 
<script src="js/vendors/jquery.isotope.min.js"></script> 
<script src="js/vendors/jquery.bxslider.min.js"></script> 
<script src="js/vendors/owl.carousel.min.js"></script> 
<script src="js/vendors/jquery.sticky.js"></script> 
<script src="js/vendors/color-switcher.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/zap.js"></script>

<!-- begin map script--> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<script type="text/javascript">
/*==========  Map  ==========*/
var map;
function initialize_map() {
if ($('#map').length) {
  var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
  var mapOptions = {
    zoom: 17,
    center: myLatLng,
    scrollwheel: false,
    panControl: false,
    zoomControl: true,
    scaleControl: false,
    mapTypeControl: false,
    streetViewControl: false
};
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    tittle: 'Envato',
    icon: './images/contact/map-locator.png'
});} 
else {
  return false;
}}
google.maps.event.addDomListener(window, 'load', initialize_map);
</script>
</body>

<!-- Mirrored from 204.48.28.144/html_demos/zap/animation-version/contact_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 13:43:16 GMT -->
</html>