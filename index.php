<!DOCTYPE html> 
<html> 
	<head>
  <meta charset="UTF-8">	
	<title>Welcome to CATEr</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="jquery.mobile.structure-1.0.1.css" />
	<link rel="apple-touch-icon" href="images/launch_icon_57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/launch_icon_72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/launch_icon_114.png" />
	<link rel="stylesheet" href="jquery.mobile-1.0.1.css" />
	<link rel="stylesheet" href="custom.css" />
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.mobile-1.0.1.min.js"></script>
	<script src="js/libs/underscore-min.js" type="text/javascript"></script>
	<script src="js/libs/backbone-min.js" type="text/javascript"></script>
</head> 

<body> 
<div data-role="page" id="home" data-theme="c">

	<div data-role="content">
	
	<div id="branding">
		<h1>Restaurant Picker </h1>
	</div>
	
	<div class="choice_list"> 
	<h1> What type of event are you planning? </h1>
	
	<ul data-role="listview" data-inset="true" >
	<li><a href="choose_cuisine.html" data-transition="slidedown"> <h3> Baby Shower</h3></a></li>
	<li><a href="choose_cuisine.html"  data-transition="slidedown"><h3> Bridal Shower </h3></a></li>
	<li><a href="choose_cuisine.html"  data-transition="slidedown"> <h3> Bar Mitvah</h3></a></li>
	<li><a href="choose_cuisine.html"  data-transition="slidedown"> <h3> Backyard BBQ</h3></a></li>
	<li><a href="choose_cuisine.html"  data-transition="slidedown"> <h3> Business Meeting</h3></a></li>
	<li><a href="choose_cuisine.html"  data-transition="slidedown"> <h3> Graduation Party</h3></a></li>
	<li><a href="choose_cuisine.html"  data-transition="slidedown"> <h3> Wedding Shower </h3></a></li>	
	</ul>	
	
	</div>
	</div>

</div><!-- /page -->
</body>
</html>
