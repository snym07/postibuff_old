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
  	<link rel="stylesheet" type="text/css" href="css/places_search.css">
	
<!-- Scripts -->
  	<script type="text/javascript" src="js/material.min.js"></script>
  	<script type="text/javascript" src="js/angular.min.js"></script>

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
<body ng-app="myApp">
	
	<!-- The drawer is always open in large screens. The header is always shown,
  even in small screens.-->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header" ng-controller="MyController">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      
    </div>
  </header>
  <div class="mdl-layout__drawer" style="overflow-x:hidden;">
    <!-- logo -->
	  	<div class="logo">
	  		<img src="images/full_logo.png">
	  	</div>

    <!-- filter tabs -->
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	  <div class="mdl-tabs__tab-bar">
	      <a href="#tags" class="mdl-tabs__tab is-active">Tags</a>
	      <a href="#metro-panel" class="mdl-tabs__tab">Metro</a>
	      <a href="#area" class="mdl-tabs__tab">Area</a>
	  </div>

	  <div class="labels mdl-tabs__panel is-active" id="tags">
	    
	    	<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="monuments">
			  <input type="checkbox" id="monuments" class="mdl-checkbox__input" checked>
			  <span class="mdl-checkbox__label">Monuments</span>
			</label>

			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="shopping">
			  <input type="checkbox" id="shopping" class="mdl-checkbox__input" checked>
			  <span class="mdl-checkbox__label">Shopping</span>
			</label>

			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="street-food">
			  <input type="checkbox" id="street-food" class="mdl-checkbox__input" checked>
			  <span class="mdl-checkbox__label">Street Food</span>
			</label>

			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="leisure">
			  <input type="checkbox" id="leisure" class="mdl-checkbox__input" checked>
			  <span class="mdl-checkbox__label">Leisure</span>
			</label>

			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="museums">
			  <input type="checkbox" id="museums" class="mdl-checkbox__input" checked>
			  <span class="mdl-checkbox__label">Museums</span>
			</label>

			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="holy-places">
			  <input type="checkbox" id="holy-places" class="mdl-checkbox__input" checked>
			  <span class="mdl-checkbox__label">Holy Places</span>
			</label>

			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="gardens-parks">
			  <input type="checkbox" id="gardens-park" class="mdl-checkbox__input" checked>
			  <span class="mdl-checkbox__label">Gardens and Parks</span>
			</label>

			

	  </div>


	  <div class="labels mdl-tabs__panel" id="metro-panel">
	    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="red-line">
		  <input type="checkbox" id="red-line" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">Red Line</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="yellow-line">
		  <input type="checkbox" id="yellow-line" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">Yellow Line</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="blue-line">
		  <input type="checkbox" id="blue-line" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">Blue Line</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="green-line">
		  <input type="checkbox" id="green-line" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">Green Line</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="violet-line">
		  <input type="checkbox" id="violet-line" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">Violet Line</span>
		</label>

		<!-- Slider with Starting Value for distance -->
		<p class="distance-slider">Distance from metro station : <br>{{slider}} meters</p>

			<input class="mdl-slider mdl-js-slider" type="range"
			  min="0" max="10000" value="0" step="100" tabindex="0" ng-model="slider">



	  </div>

	  <div class="labels mdl-tabs__panel" id="area">
	    
	    	<!-- delhi districts -->
		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="new-delhi">
		  <input type="checkbox" id="new-delhi" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">New Delhi</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="old-delhi">
		  <input type="checkbox" id="old-delhi" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">Old Delhi</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="north-delhi">
		  <input type="checkbox" id="north-delhi" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">North Delhi</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="east-delhi">
		  <input type="checkbox" id="east-delhi" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">East Delhi</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="south-delhi">
		  <input type="checkbox" id="south-delhi" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">South Delhi</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="south-west-delhi">
		  <input type="checkbox" id="south-west-delhi" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">South West Delhi</span>
		</label>

		<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="west-delhi">
		  <input type="checkbox" id="west-delhi" class="mdl-checkbox__input" checked>
		  <span class="mdl-checkbox__label">West Delhi</span>
		</label>

			

	  </div>

	</div> <!-- end filter tabs -->




  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
    <!-- content goes here -->

    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	  <div class="mdl-tabs__tab-bar">
	      <a href="#search-places" class="mdl-tabs__tab is-active">Search places</a>
	      <a href="#our-categories" class="mdl-tabs__tab">Our&nbsp;&nbsp;categories</a>
	      
	  </div>

	  <!-- Search places tab -->
	  <div class="mdl-tabs__panel is-active" id="search-places">
	    <?php include ('../includes/files/search_tab.php'); ?>
	  </div>
	  <!-- end search places tab -->

	  <!-- Our categories tab -->
	  <div class="mdl-tabs__panel" id="our-categories">
	    <div class="mdl-grid">
			
	    <!-- test -->
	    	<!-- Three Line List with secondary info and action -->

<ul class="demo-list-three mdl-list mdl-cell mdl-cell--12-col">
  <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi Our top 10 places for get together in Delhi 
        Our top 10 places for get together in DelhiOur top 10 places for get together in Delhi
        Our top 10 places for get together in DelhiOur top 10 places for get together in Delhi...
      </span>
    </span>
  </li><hr>
  <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi...
      </span>
    </span>
    
  </li><hr><li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi...
      </span>
    </span>
    
  </li><hr><li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi...
      </span>
    </span>
    
  </li><hr><li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi...
      </span>
    </span>
    
  </li><hr><li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi...
      </span>
    </span>
    
  </li><hr><li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi...
      </span>
    </span>
    
  </li><hr><li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <a href="#" class="">Get Together</a>
      <span class="mdl-list__item-text-body">
        Our top 10 places for get together in Delhi...
      </span>
    </span>
    
  </li><hr>
</ul>
	    <!-- end test -->


		</div>
	  </div> 
	  <!-- end our categories tab -->
	
	</div>

    </div>
  </main>
</div>

</body>
</html>

<!-- 

1) top Ten haunted places in delhi
2) top ten budget places for shopping
3) top ten places for long drive
4) top ten places which are open 24*7
5) top ten budget places to go on a date
6) 
7) top 10 museums

 -->