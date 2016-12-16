<style type="text/css">
	.search-bar{
		
		margin: 10px auto;
		
	}

	.search-bar input[type="text"]{
		border-radius: 100px;
		background-color: white;
		padding: 5px 0;
		width: 100%;
		text-align: center;
		font-size: 1.5em;
		color: #616161;
		border: none;
		box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
	}

	.search-bar input[type="text"]:focus{
		outline: none;
		box-shadow: inset 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
	}

	/* style for cards */
	.demo-card-wide{
	  width: 100%;
	  height: 350px;
	  margin: 20px auto;
	  
	}

	.demo-card-wide > .mdl-card__title {
	  color: #fff;
	  height: 200px;
	  background:  center / cover;
	}
	.demo-card-wide > .mdl-card__menu {
	  color: #fff;
	}

	.demo-card-wide h4{
		margin: 0;
	}

</style>

<div>
	<div class="mdl-grid">
	<div class="search-bar mdl-cell mdl-cell--4-col-desktop">
		<input type="text" class="search-bar" placeholder="Search" autofocus ng-model="search.name">
		
	</div>
	
</div>

<h5 ng-hide="search" class="mdl-typography--text-center mdl-color-text--grey-500">Enter name of any place, monument, museum etc...
																				 in search bar (Eg: Lotus Temple)</h5>

<div ng-show="showLoader">
	<?php include('../includes/loading.html'); ?>
</div>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" 
	  ng-repeat="item in places | filter:search | orderBy:'name' | limitTo : 20">
	  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
	    <div class="mdl-card__title">
	      <!-- this title is left blank for image -->
	      <!-- <span><img ng-src="../public/images/test_images/{{item.metro_distance}}.jpg"></span> -->
	    </div>
	    <div class="mdl-card__supporting-text">
	      <h4>{{item.name}}</h4>
	      <?php include ('icons/location_icon_black.svg'); ?>{{item.address | limitTo:25}}...
	    </div>
	    <div class="mdl-card__actions mdl-card--border">
	      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
	        View
	      </a>
	    </div>
	   
	  </div>
	</div>
</div>

</div>


<script type="text/javascript">
	var myApp = angular.module('myApp', []);

	myApp.controller('MyController', function($scope, $http){
		$scope.showLoader = true;
		
		$http.get('../public/js/places.json').success(function(data){
			$scope.showLoader = false;
			$scope.places = data;

		});
	});
</script>

<!-- <div class="mdl-grid">
	<?php
		//for ($i = 0; $i < 8; $i++)
	 		//include ('../includes/files/cards.php'); 
	 ?>
</div> -->