<?php
session_start();
require 'config/connect.php';
require 'functions/function.php';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CPL T20 | DRAFT</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/app.css" />
	<link rel="stylesheet" href="css/slider.css" />
    
    <script src="js/kev.js"></script>    
    <script src="js/vendor/modernizr.js"></script>
	
	      <script type="text/javascript">
	                window.onload = function() {
	  var div=$('#top_bar');
	div.animate({top:'-5px'},"slow");
	
	};
	</script>
	
  </head>
  <body>
  
	 <!-- Top Bar -->	
	 	<div style="position:fixed;background:;width:100%;height:140px;top:0px;z-index:2;">
	 		<div id="top_bar" style="background:url(./images/top_bar.png);height:150px;width:1000px;position:relative;margin-left:auto;margin-right:auto;top:-200px;">
	 		<div style="color:#271b3f;font-size:40px;margin-left:150px;margin-top:40px;position:absolute;"> <b>Round 1 </b></div>
	 		</div>
	 	</div>
		
		
	  <div class="row round-fix">
	  	<div class=" large-centered  round columns">
	  		<!-- salary selection range price goes here -->
			 <span id="result"></span>
	  	</div>
	  </div>
	  <div class="row" style="margin-top:180px;margin-left:auto;margin-right:auto;width:690px;height:400px;background:;">
	  	<div class="large-12 large-centered center columns">
	  		<!-- SLIDER PLACE HERE -->
			<div class="iphone-slider" style="text-decoration:none;">
			<input id="range" type="range" min="1" max="13" value="1">
			
			</div>
			
	  	</div>
	  </div>

    <script src="js/scrollReveal.min.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/custom.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
