<!DOCTYPE html PUBLIC
    "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<title>Casey</title>
<meta name="description" content="a description of your page"> 
<meta name="keywords" content="a, list, of, keywords"> 
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript" src="scripts/external.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header"> 
		<h1><a href="home.php" title="Casey Contracting">Casey Contracting<span>&nbsp;
		</span></a>
		</h1>

	<div id="mainMenuContainer">
		<?php
		require("mainMenu.html");
		?>
	</div>
	</div>

<div id="container">

	<div id="flashContent">

		<object type="application/x-shockwave-flash" 
		data="flash/header.swf" width="816" height="263">
		<param name="movie" value="flash/header.swf" />
		<param name="wmode" value="transparent" />

		<!-- no flash content -->
		<p>
		Attempting to load flash content. If your system does not have the latest flash player installed 
		please visit the <a href="http://www.adobe.com/products/flashplayer">Adobe Flash Player Website</a> 
		to get it.
		</p>
		<!-- end no flash content -->
		</object> 
	</div>

	<div id="content">
	<img class="imghome" src="difference.jpg" width="236" height="348" alt="cottage deck">
	<h2>THE DIFFERENCE:</h2>
	<p>It is of the utmost importance for everyone involved in any kind of construction, to have a good 
	working relationship. This not only includes the people on site, but it also includes the people we work 
	for.
	</p>
	<p>This is easy to accomplish through an open line of communication, along with the ability to be 	
	trustworthy, and honest. This is a two way street.
	</p>
	<p class="differenceBottomPad">With that as part of our building atmosphere, everything else will fall into place.</p>
	</div>

	<div id="footer">
		<?php
		require("footerMenu.html");
		?>
		
		<p>Copyright &copy; 2008, Casey Contracting All Rights Reserved | 
		<a href="http://www.divinedesigns.ca" rel="external"> 
		Website Design by <span>Divine Designs.ca</span> - Divinely Inspired Web Design
		</a>
		</p>
	</div>


</div>
</div>
</body>
</html>