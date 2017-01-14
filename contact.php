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
	<img class="imghome" src="contact.jpg" width="236" height="246" alt="home interior">
		<div id="contactContainer">
			<div id="addressHolder">
			<h2>CONTACT US:</h2>
			<p>Cary J. Cain</p>
			<address>1743 Brackenrig Rd.<br>
			Utterson Muskoka, On<br>
			P0B 1M0<br>
			</address>
			<!--<p><span class="services">Office Phone/Fax:</span> <b>705-769-3667</b></p><br>-->
			<p><span class="services">Office Phone/Fax:</span> <b>705-769-3667</b></p><br>
			<p><span class="services">Cellular Phone:</span> <b>705-644-0077</b></p>
			</div>

			<div id="formHolder">
				<form name="form" id="form" action="form-to-email.php" method="post">
				<fieldset>
				<legend>&nbsp;</legend>
				<label for="name">NAME</label>
				<input type="text" id="name" name="name"><br>

				<label for="phone">PHONE</label>
				<input type="text" id="phone" name="phone"><br>

				<label for="email">EMAIL</label>
				<input type="text" id="email" name="email"><br>

				<textarea rows="3" cols="20" id="comments" name="comments"></textarea>
				
				<input type="image" class="submit" name="submit" src="send.gif" value="submit"><br>

				</fieldset>
				</form>
			</div>
		</div>

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