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
  		<img id="logo" src="img/geosys.png"/>
	  <div class="container-fluid">
	    <div class="navbar-header">

	    </div>
	  </div>
	</nav>
	<div id="all">
	    <div id="mySidenav" class="sidenav">
	    	<span id="name">geosys</span>
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
		  <a href="#">Data</a>
		</div>

		<!-- Use any element to open the sidenav -->
		<!-- <span onclick="openNav()">open</span> -->

		<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
		<div id="content">
		  <iframe class="hide" id="map" src="https://www.google.com/maps/d/embed?mid=19mTZxe-1E_n9vpvyHYzSInVkndE&z=6&ll=1.3733,32.2903" width="1000" height="500"></iframe>
		  <div class="padded" id="about">
		  	<h3>What is GeoSys</h3>
		  	<p>The Geo-sys  is an intelligent system governed by multiple sets of algoriths which are utilised in the analysis of geo-data gathered frome multiple trusted data pools, to come up with a systematic projection and evaluation of tasks and projects set to venture by multi-corporations.</p> 
		  	<h3>the Team</h3>
		  	<ul>
		  		<li>Albert Emron</li>
		  		<li>Peter Ogwok Baguma</li>
		  		<li>Sidney Nkoba</li>
		  		<li>Lincoln karuhanga</li>
		  	</ul>
		  </div>
		  <div class="hide" id="services">
		  	<div class="hide" id="malaria">
		  		<h3>Measures &amp; Treatment Strategies</h3>
		  		<p>data about the straegic treatments and preventive measures put on the market in the fight of the tragic disease malaria</p>
		  		<img src="img/malaria.png">
		  		<a href="https://drive.google.com/open?id=0B1vXNpdX4OKAOEJqUGFmQWgtWUFBMy1xcmZsVWdfbzlJS3NV">Guidelines for Treatment of malaria, 2015- Pdf(2.4mb)</a>
		  		<h3>Statistics</h3>
		  			<iframe width="599" height="486" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1LHmVgYDL75wrKH3y9r7fc1_ONzvXsmqdTlxs7FDuaOo/pubchart?oid=1465645593&amp;format=interactive"></iframe>
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