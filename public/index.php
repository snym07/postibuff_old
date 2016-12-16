<!-- connection to database -->
<?php include ('../includes/database_connection.php'); ?>

<!DOCTYPE html>
<html>
<head>

	<title>Postibuff</title>

<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- to change color of notification bar -->
		<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#009688">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#009688">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#009688">

<!-- Shortcut icon -->
	<link rel="shortcut icon" href="images/shortcut_icon.png">

<!-- CSS links -->
  	<link rel="stylesheet" type="text/css" href="css/material.min.css">
  	<link rel="stylesheet" type="text/css" href="css/index.css">
	
<!-- Scripts -->
  	<script src="js/material.min.js" type="text/javascript"></script>

<!-- google icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- roboto font -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

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
	      <a class="mdl-navigation__link" href="places_search.php">Places</a>
	      <a class="mdl-navigation__link" href="">Events</a>
	      <a class="mdl-navigation__link" href="">Contact Us</a>
	      <a class="mdl-navigation__link" href="">About Us</a>
	    </nav> <hr>

	    <!-- suggestion box -->
	    <div class="suggestion-box mdl-shadow--2dp">
	    	<a href="#"><?php include ('icons/suggestion_icon.svg'); ?>
	    	<span style="margin:20px">Add Event</span></a>
	    </div>
	    <hr>

	    <!-- social sites follow links -->
	    <div class="social-icons">
	    	<a href="#"><span style="margin:5px"><?php include ('icons/facebook_icon.svg'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/google_plus_icon.svg'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/twitter_icon.svg'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/youtube_icon.svg'); ?></span></a>
	    	<a href="#"><span style="margin:5px"><?php include ('icons/instagram_icon.svg'); ?></span></a>
	    </div>
	  </div>
	  <main class="mdl-layout__content">
	    <div class="page-content">
	    <!-- content goes here -->

	    <!-- Postibuff name at top -->
	    <div class="top-logo mdl-cell--hide-desktop">
	    	<img src="images/full_logo.png">
	    </div>

	    <!-- delhi home page image -->
	    <div class="bg-img">
	    	<div class="img-text img-text-position-desktop mdl-cell--hide-tablet mdl-cell--hide-phone">
	    		<h4>Hangout. Explore. Enjoy.</h4>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

	    		<h5>VIEW MORE</h5>
	    	</div>

	    	<!-- for tablet -->
	    	<div class="img-text img-text-position-tablet mdl-cell--hide-desktop mdl-cell--hide-phone">
	    		<h4>Hangout. Explore. Enjoy.</h4>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

	    		<h5>VIEW MORE</h5>
	    	</div>

	    	<!-- for phones -->
	    	<div class="img-text img-text-position-phone mdl-cell--hide-desktop mdl-cell--hide-tablet">
	    		<h4>Hangout. Explore. Enjoy.</h4>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

	    		<h5>VIEW MORE</h5>
	    	</div>
	    </div>

	    <!-- quote -->
		
		<div class="mdl-grid">
			<div class="quote mdl-cell mdl-cell--10-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
				<img class="quote-icon-left" src="icons/open_quote_icon.svg">
		    
		    	<h4 class="mdl-typography--text-center">Do you know! After Nairobi in Kenya, The Delhi ridge makes it the World’s Second most bird-rich Capital city.</h4>
		    
		    	<img class="quote-icon-right" src="icons/close_quote_icon.svg">
		    </div>
		    
		</div>

<!-- database query -->
<?php
	$query = "SELECT * FROM places";
	$result = mysqli_query($connection, $query);
	// $row = mysqli_fetch_row($result);
?>

		<!-- categories -->

		<div class="mdl-grid">
		<?php
			for($i=0; $i<4; $i++){
				$row = mysqli_fetch_row($result);
				$name = $row[1];
				$location = $row[2]; 
				include ('../includes/files/cards.php');
			} 
		?>
		</div>



		<!-- temperory php loop -->
		<?php for($i=0;$i<3;$i++){ ?>
		<div class="mdl-grid">
		<!-- Sub category heading -->
			<p class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--title-color-contrast">Street food and Restaurants</p>

    		<!-- Category cards -->
			<div class="category-card mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
			  <div class="mdl-card__title">
			    <!-- leave this div blank -->
			  </div>
			  <div class="mdl-card__supporting-text">
			  	<h4 class="category-title"><?php echo $row[1];?><!-- Lotus temple --></h4>
			  	
			  		<span class="location-icon"><?php include ('icons/location_icon_black.svg'); ?></span>
			    	<!-- location and its addresss... -->
			    	<?php 
			    		
			    		echo $row[2]; ?>
			  	
			    
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
			      View
			    </a>
			  </div>
			</div>

			<div class="category-card mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
			  <div class="mdl-card__title">
			    <!-- leave this div blank -->
			  </div>
			  <div class="mdl-card__supporting-text">
			  	<h4 class="category-title">Lotus temple</h4>
			  	
			  		<span class="location-icon"><?php include ('icons/location_icon_black.svg'); ?></span>
			    	location and its addresss...
			  	
			    
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
			      View
			    </a>
			  </div>
			</div>

			<div class="category-card mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
			  <div class="mdl-card__title">
			    <!-- leave this div blank -->
			  </div>
			  <div class="mdl-card__supporting-text">
			  	<h4 class="category-title">Lotus temple</h4>
			  	
			  		<span class="location-icon"><?php include ('icons/location_icon_black.svg'); ?></span>
			    	location and its addresss...
			  	
			    
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
			      View
			    </a>
			  </div>
			</div>

			<div class="category-card mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
			  <div class="mdl-card__title">
			    <!-- leave this div blank -->
			  </div>
			  <div class="mdl-card__supporting-text">
			  	<h4 class="category-title">Lotus temple</h4>
			  	
			  		<span class="location-icon"><?php include ('icons/location_icon_black.svg'); ?></span>
			    	location and its addresss...
			  	
			    
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
			      View
			    </a>
			  </div>
			</div>


		</div> <!-- grid end -->

		<!-- Show more button -->
		<button class="mdl-button mdl-js-button mdl-button--primary" style="display:block;margin:10px auto;">
		  Show more
		</button>
		
		<hr class="gap-between-categories"> <?php } ?>

	    <!-- events div -->
	    
		<div class="mdl-grid">	    		
		<p class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--title-color-contrast">Events</p>
	    		<a href="#" class="event mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp" style="background-color:#FF5722;">
	    			<h2>29 </h2><br> sept.
	    			<div class="event-description">
	    				<h4>Be on Streets</h4>
	    				<span class="location-icon"><?php include ('icons/location_icon.svg'); ?></span>
	    				location and its addresss...
	    			</div>
	    		</a>

	    		<a href="#" class="event mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp" style="background-color:#03A9F4;">
	    			<h2>06 </h2><br> oct.
	    			<div class="event-description">
	    				<h4>Sunburn</h4>
	    				<span class="location-icon"><?php include ('icons/location_icon.svg'); ?></span>
	    				location and its addresss...
	    			</div>
	    		</a>

	    		<a href="#" class="event mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp" style="background-color:#9C27B0;">
	    			<h2>12 </h2><br> june
	    			<div class="event-description">
	    				<h4>Priyadarshini</h4>
	    				<span class="location-icon"><?php include ('icons/location_icon.svg'); ?></span>
	    				location and its addresss...
	    			</div>
	    		</a>

	    		<a href="#" class="event mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp" style="background-color:#FF5722;">
	    			<h2>29 </h2><br> sept.
	    			<div class="event-description">
	    				<h4>Be on Streets</h4>
	    				<span class="location-icon"><?php include ('icons/location_icon.svg'); ?></span>
	    				location and its addresss...
	    			</div>
	    		</a>

	    		<!-- Show more button -->
				<button class="mdl-button mdl-js-button mdl-button--primary" style="display:block;margin:10px auto;">
				  Show more
				</button>
	    	
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
