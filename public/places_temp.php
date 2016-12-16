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
  	<link rel="stylesheet" type="text/css" href="css/places_temp.css">
	
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
	
<!-- Fixed tab header -->
	<!-- Simple header with fixed tabs. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <!-- Title -->
	      <span class="mdl-layout-title">Postibuff</span>
	    </div>
	    <!-- Tabs -->
	    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
	      <a href="#description" class="mdl-layout__tab is-active">Desrciption</a>
	      <a href="#gallery" class="mdl-layout__tab">Gallery</a>
	      <a href="#map" class="mdl-layout__tab">Map</a>
	      <a href="#view" class="mdl-layout__tab">360&deg; View</a>
	    </div>
	  </header>
	  <div class="mdl-layout__drawer" style="overflow-x:hidden;">
	    
	    <!-- drawer -->
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
		    <!-- end drawer -->
	  </div>
	  <main class="mdl-layout__content">
	    <section class="mdl-layout__tab-panel is-active" id="description">
	      <div class="page-content">

	      	<!-- description content -->
	      	<div class="pic-container">
	      		<div class="mdl-grid">
		      		<!-- image -->
		      		<!-- <div class=""> -->
		      			<img src="images/jm/jantar_mantar_dp.jpg" class="main-pic mdl-shadow--6dp">
		      		<!-- </div> -->
		      	</div>

		      		<!-- description -->
		      	<div>
		      		<div class="place-name mdl-typography--text-center">
		      			<!-- Name -->
		      			<h3>Janatar Mantar</h3>
		      			
		      			
		      			<h5>Sansad Marg, Connaught Place, New Delhi, Delhi 110001</h5>

		      			
		      			<h5>Monument</h5>

		      		</div>
		      	</div>
	      	</div>

	      	<!-- about the place -->
	      	<div class="mdl-grid">
	      		<div class="place-description mdl-cell mdl-cell--6-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone">
	      			<h4>Description</h4>
	      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi posuere, dignissim purus eu,
			           semper odio. Suspendisse potenti. Praesent id elit et risus lacinia gravida sed et velit. Sed commodo
			            ac mauris a placerat. Duis maximus diam in mi tincidunt, id convallis metus maximus. Donec convallis
			             pretium nunc. Praesent ut finibus ex, nec feugiat ligula. Aliquam id maximus turpis
             		</p>
	      		</div>

	      		<div class="other-info mdl-cell mdl-cell--4-col-desktop mdl-cell--3-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
	      			<div class="other-info-icon">
	      				<span class=""><?php include ('icons/other_info_icon.svg'); ?></span>
	      			</div>
	      			
	      			<h4>Other info</h4>
	      			<p>stuff like distance from metro nearest metro and all </p>
	      		</div>
	      	</div>
<hr>

			<!-- discuss comment box -->
				<div id="disqus_thread"></div>
				<script>
				    /**
				     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
				     */
				    
				    var disqus_config = function () {
				        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				    };
				    
				    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
				        var d = document, s = d.createElement('script');
				        
				        s.src = '//EXAMPLE.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
				        
				        s.setAttribute('data-timestamp', +new Date());
				        (d.head || d.body).appendChild(s);
				    })();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
			<!-- comment box end -->
	      </div>
	    </section>

	    <section class="mdl-layout__tab-panel" id="gallery">
	      <div class="page-content">
	      	<!-- gallary content -->
	      	<div style="margin:20px">
	      		<?php include ('../includes/files/gallery_temp.php'); ?>
	      	</div>

	      </div>
	    </section>

	    <section class="mdl-layout__tab-panel" id="map">
	      <div class="page-content">

	      <!-- map content -->
	      	<?php include ('../includes/files/map.php'); ?>

	      </div>
	    </section>

	    <section class="mdl-layout__tab-panel" id="view">
	      <div class="page-content">

	      <!-- 360 degree view content -->
	      	<?php include ('../includes/files/360_content.php'); ?>

	      </div>
	    </section>

	    <!-- footer -->
	    <footer class="mdl-mini-footer">
		  <div class="mdl-mini-footer__left-section">
		    <div class="mdl-logo">Postibuff</div>
		    <ul class="mdl-mini-footer__link-list">
		      <li><a href="#">Help</a></li>
		      <li><a href="#">Privacy &amp; Terms</a></li>
		    </ul>
		  </div>
		</footer>
	    <!-- end footer -->
	  </main>
	</div>

</body>
</html>