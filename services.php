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
	<div id="subMenu">
		<dl id="gallery">
		<dt>Service Galleries</dt>
			<?php
		require("serviceGalleriesMenu.html");
		?>
		</dl>
	</div>

	<h2>GENERAL SERVICES:</h2>
	<p>In almost every project, there is a need to apply for a building permit. This can sometimes be one of 
	the most difficult aspects of the whole plan.
	</p>
	<p>At the very least, each permit application needs to have a full set of architectural drawings, which 
	need to include: foundation plans, floor plans, elevation plans, structural drawings, cross sections, 
	electrical layout, plumbing layout, mechanical layout calculations, and the list goes on.
	</p>
	<p>Let us not forget environmental issues involving permits for septic concerns and Ministry of Natural 
	Resources for shoreline development. 
	</p>
	<p>If by chance your proposed building / renovation wishes, are beyond the limitations expressed by local 
	by-laws, you may find the need to apply for other permits. These can include applications such as Minor 
	Variances and Zoning Amendments.
	</p>
	<p>All of these requirements are necessary to be in place before any construction can be done.
	And they can all be very time consuming. As part of our services at Casey Contracting we make ourselves 
	available to help with all of the above acquisitions.
	</p>
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