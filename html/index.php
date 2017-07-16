<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
    <script type="text/javascript" src="scripts/main.js"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
  </head>
  <body >
  	<nav class="navbar navbar-default">
  		<h1 id="title">Geosys</h1>
	  <div class="container-fluid">
	    <div class="navbar-header">
	    </div>
	  </div>
	</nav>
	<div id="all">
	    <div id="mySidenav" class="sidenav">
		  <a onclick="about()" href="#">About</a>
		  <a onclick="services()" href="#">Services</a>
		    <ul id="menu" class="hide">
		      <li>
		      	<span onclick="diseases()">Health</span>
		      	<ul id="diseases" class="hide">
		      		<li onclick="info('malaria')">Malaria</li>
		      		<li onclick="info('aids')">HIV/AIDS</li>
		      		<li onclick="info('cancer')">Cancer</li>
		      	</ul>
		      </li>
		      <li>Transport</li>
		      <li>Agriculture</li>
		      <li>Education</li>
		    </ul>
		  <a onclick="visualisations()" href="#">Visualisations</a>
		  <a onclick="data()" href="#">Data</a>
		</div>

		<!-- Use any element to open the sidenav -->
		<!-- <span onclick="openNav()">open</span> -->

		<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
		<div id="content">
		  <iframe class="hide" id="map" src="https://www.google.com/maps/d/embed?mid=19mTZxe-1E_n9vpvyHYzSInVkndE&z=5&ll=1.3733,32.2903" width="1000" height="500"></iframe>
		  <div class="padded" id="about">
		  	The Geo-sys  is an intelligent system governed by multiple sets of algoriths which are utilised in the analysis of geo-data gathered frome multiple trusted data pools, to come up with a systematic projection and evaluation of tasks and projects set to venture by multi-corporations. 
		  </div>
		  <div class="hide" id="services">
		  	<div class="hide" id="malaria">
		  		Malaria Data
		  	</div>
		  	<div class="hide" id="aids">
		  		HIV/AIDS Data
		  	</div>
		  	<div class="hide" id="cancer">
		  		Cancer Data
		  	</div>
		  </div>
		  <div class="hide" id="data">
		  	Data
		  </div>
		</div>
	</div>
  </body>
</html>