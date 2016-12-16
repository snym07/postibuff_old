<!DOCTYPE html>
<html>
<head>

	<title>Postibuff</title>

<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS links -->
  	<link rel="stylesheet" type="text/css" href="css/material.min.css">
  	<link rel="stylesheet" type="text/css" href="home-custom.css">
	
<!-- Scripts -->
  	<script src="js/material.min.js" type="text/javascript"></script>

<!-- google icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!--[if IE]>
<script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.7/es5-shim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/classlist/2014.01.31/classList.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

</head>
<body>


	<!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">

	  <div class="mdl-layout__drawer" style="overflow-x:hidden;">
	  <!-- logo -->
	  	<div class="logo">
	  		<img src="images/full_logo.png">
	  	</div>
	    
	    <nav class="mdl-navigation">
	      <a class="mdl-navigation__link" href="categories.php">Categories</a>
	      <a class="mdl-navigation__link" href="">Events</a>
	      <a class="mdl-navigation__link" href="">Contact Us</a>
	      <a class="mdl-navigation__link" href="">About Us</a>
	    </nav> <hr>

	    <!-- suggestion box -->
	    <div class="suggestion-box mdl-shadow--2dp">
	    	<a href="#"><?php include ('icons/suggestion_icon.php'); ?>
	    	Sugestion Box</a>
	    </div>
	    <hr>

	    <!-- social sites follow links -->
	    <div class="social-icons">
	    	<a href="#"><span style="margin:5px"><?php include ('icons/facebook_icon.php'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/google_plus_icon.php'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/twitter_icon.php'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/youtube_icon.php'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/instagram_icon.php'); ?></span></a>
	    </div>
	  </div>
	  <main class="mdl-layout__content">
	    <div class="page-content">
	    <!-- content goes here -->

	    <!-- delhi home page image -->
	    <div class="bg-img">
	    	<h1 class="bg-heading">Delhi</h1> <!-- embedded in the background image -->
	    </div>

	    <!-- quote -->
		<!--
		<div class="quote">
	    	<?php include ('icons/quote_icon.php'); ?>
	    
	    	<h4 class="mdl-typography--text-center">After Nairobi in Kenya, The Delhi ridge makes it the World’s Second most bird-rich Capital city</h4>
	    
	    	<?php include ('icons/quote_icon.php'); ?>
	    </div>
	    -->

	    <div class="mdl-grid">
	    	<!-- categories -->
	    	
		    <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone">
		    	<p class="mdl-typography--title-color-contrast">Categories</p>
		    	<div class="all-category">
		    		<a href="#" class="category mdl-shadow--2dp">Places to go after exams</a>

		    		<a href="#" class="category mdl-shadow--2dp">Places to go in between exams</a>

		    		<a href="#" class="category mdl-shadow--2dp">Places to go for shopping</a>

		    		<a href="#" class="category mdl-shadow--2dp">Street food and Restaurants </a>

		    		<a href="#" class="category mdl-shadow--2dp">places for reunion and get-together</a>

		    		<a href="#" class="category mdl-shadow--2dp">Places for meetings (for official club and society)</a>

		    		<a href="#" class="category mdl-shadow--2dp">Historical places</a>

		    		<a href="#" class="category mdl-shadow--2dp">Places near metro stations</a>

		    		<a href="#" class="category mdl-shadow--2dp">Places to go for relaxation</a>

		    		<a href="#" class="category mdl-shadow--2dp" style="color:#F44336">More...</a>

		    	</div>
		    </div>
	    	

	    	<!-- events div -->
	    	<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--3-col-tablet mdl-cell--4-col-phone" style="background-color:">
	    		<p class="mdl-typography--title-color-contrast">Events</p>

	    		<a href="#" class="event mdl-shadow--2dp" style="background-color:#FF5722;">
	    			<h2>29 </h2><br> sept.
	    			<div class="event-description">
	    				<h4>Be on Streets</h4>
	    				<?php include ('icons/location_icon.php'); ?>
	    				location and its addresss...
	    			</div>
	    		</a>

	    		<a href="#" class="event mdl-shadow--2dp" style="background-color:#03A9F4;">
	    			<h2>06 </h2><br> oct.
	    			<div class="event-description">
	    				<h4>Sunburn</h4>
	    				<?php include ('icons/location_icon.php'); ?>
	    				location and its addresss...
	    			</div>
	    		</a>

	    		<a href="#" class="event mdl-shadow--2dp" style="background-color:#9C27B0;">
	    			<h2>12 </h2><br> june
	    			<div class="event-description">
	    				<h4>Priyadarshini</h4>
	    				<?php include ('icons/location_icon.php'); ?>
	    				location and its addresss...
	    			</div>
	    		</a>

	    		<a href="#" class="category mdl-shadow--2dp" style="color:#F44336">More...</a>
	    	</div>
	    	
	    </div>

	    <!-- footer -->

	    <footer class="mdl-mega-footer">
		  <div class="mdl-mega-footer__middle-section">

		    <div class="mdl-mega-footer__drop-down-section">
		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
		      <h1 class="mdl-mega-footer__heading">Connect</h1>
		      <ul class="mdl-mega-footer__link-list">
		        <li><a href="#">Facebook</a></li>
		        <li><a href="#">Instagram</a></li>
		        <li><a href="#">Youtube</a></li>
		        <li><a href="#">Twitter</a></li>
		        <li><a href="#">Google plus</a></li>
		      </ul>
		    </div>

		    <div class="mdl-mega-footer__drop-down-section">
		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
		      <h1 class="mdl-mega-footer__heading">Categories</h1>
		      <ul class="mdl-mega-footer__link-list">
		        <li><a href="#">abc</a></li>
		        <li><a href="#">efg</a></li>
		        <li><a href="#">hijkl</a></li>
		      </ul>
		    </div>

		    <div class="mdl-mega-footer__drop-down-section">
		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
		      <h1 class="mdl-mega-footer__heading">Events</h1>
		      <ul class="mdl-mega-footer__link-list">
		        <li><a href="#">Upcoming</a></li>
		        <li><a href="#">Past</a></li>
		        <li><a href="#">Annual</a></li>
		        <li><a href="#">College</a></li>
		      </ul>
		    </div>

		    <div class="mdl-mega-footer__drop-down-section">
		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
		      <h1 class="mdl-mega-footer__heading">FAQ</h1>
		      <ul class="mdl-mega-footer__link-list">
		        <li><a href="#">Questions</a></li>
		        <li><a href="#">Answers</a></li>
		        <li><a href="#">Contact us</a></li>
		      </ul>
		    </div>

		  </div>

		  <div class="mdl-mega-footer__bottom-section">
		    <div class="mdl-logo">Postibuff</div>
		    <ul class="mdl-mega-footer__link-list">
		      <li><a href="#">Help</a></li>
		      <li><a href="#">Privacy &amp; Terms</a></li>
		    </ul>
		  </div>

		</footer>

	    </div> <!-- page-content end -->
	  </main>
	</div>

</body>
</html>

<!-- check how engagets (http://www.engadget.com/) uses different design for desktop (http://www.engadget.com/2015/07/03/kindle-paperwhite-review-2015/)

also check microsoft's website

https://www.eventshigh.com/detail/Delhi/dbcd2c4cbeffec50e3bf0c91c1e31303-swag-festival-ii-after-party?src=ecbox



 - http://www.mapsofindia.com/delhi/districts/
 - http://www.mapsofindia.com/delhi/places-of-interest/
 - http://www.mapsofindia.com/maps/delhi/indiagate.htm
 - https://www.eventshigh.com/detail/Delhi/3082a5b24253069135cf39b9d483c7fe-tryst-2016-annual-technical-fest?src=stream
 - https://www.eventshigh.com/city/delhi
 - https://www.eventshigh.com/browse/delhi/food-in-delhi?src=hm
 - https://www.eventshigh.com/browse/delhi/Theatre-in-delhi?src=hd
 - https://www.eventshigh.com/browse/delhi/hauz+khas-in-delhi?src=hd
 - https://www.eventshigh.com/browse/delhi/iift%20north%20delhi-in-delhi?
 - https://www.eventshigh.com/joinus
 - http://www.delhievents.com/
 - http://www.buzzintown.com/delhi/events/home.html


 -->

<!-- facts : - After Nairobi in Kenya, The Delhi ridge makes it the World’s Second most bird-rich Capital city
			- Also known as Bahai Temple, Lotus Temple is  one of the finest crafted structures is in Delhi
			- The wholesale market at Azadpur is Asia's largest fruit and vegetable market. Nearly 3,000 trucks bring in fruits and vegetables here daily for over 30,000 retail vendors.
			- One of the intersting fact about Delhi is that it has an International Toilet museum.
			- Qutub Minar is the world's tallest brick minaret.
			- Originally, The walled city of Delhi had fourteen  gates and now only 5 are standing. They are: Kashmiri Gate: Pointing North to Kashmir;  Ajmeri Gate: Facing Ajmer in Rajasthan;  Lahori Gate: Facing Lahore in Pakistan;  Delhi Gate: Road to earlier cities of Delhi;  Turkman Gate:  Named after pious saint Hazrat Shah Turkam.
			- Khari Baoli,  a street in Old Delhi, is the Asia's largest wholesale spice market.
			- Traffic in Delhi is compared to the traffic in London. Drivers sit on the right side of the car.
			-  Feroz shah Kotla stands the 3 century B.C. Ashokan Pillar. Emperor Feroz Shah Tughlaq brought this 27 tonne pillar to Delhi from Topar in Ambala, where the great Emperor Ashoka erected it.
			- the entire public transport system in New Delhi runs on environment-friendly Compressed Natural Gas. - See more at: http://www.uniglobegrandskiestravel.com/post/view/5-cool-facts-about-delhi#sthash.DJs1HXPS.dpuf

-->