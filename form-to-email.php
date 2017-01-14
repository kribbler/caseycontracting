<?php

/////////// Getting the form values/////////
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$comments = $_POST['comments'];

/////////// Making the Email Message/////////
$email_from = $email_address;
$email_subject = "Email From Casey Contracting Contact Form";
//$email_body = "You have received a new message from the user " . $name . " . Below is the message:";


$message="You have received a new message from " . $name . "
Name: ".$name."
Phone: ".$phone."
Email: ".$email_address."
Comments: ".$comments."
";


/////////// Sending the Email using the mail() function/////////
$to = "caseycon@muskoka.com";
$to = "caseycon@muskoka.com";
//$to = "daniel.oraca@gmail.com";

$headers = "From: $email_from";
// mail($to,$email_subject,$email_body,$headers);
mail($to,$email_subject,$message,$headers);
// echo "Your message was sent successfully";
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>
<title>Thank You</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
body {background:#1d1000;}
#inner {width:355px; margin:50px auto; height:173px; background:url(thankYou.jpg) no-repeat;}
		
/* just format */
div.border {border:1px solid #1d1000;}

#content {text-align:center; zborder-top:10px solid #bb8d00; zborder-bottom:10px solid #1d1000;
	margin-top:173px; padding:20px 0; color:#526719; background:#fff3dd;}

b {color:#; font-size:20px;}

a {color:#bb8d00; text-decoration:none; font-weight:bold;}
</style>
</head>
<body>


		<div id="inner" class="border">
			<div id="content">
			<p><b>Thank you <?php print $name ?><br>
			Your Message has been sent</b></p>
			<script type="text/javascript">
				setTimeout("location.href='contact.php'", 5000);
				</script>
			<p><a href="contact.php">Click here</a> 
			to continue or wait 5 seconds<br> and return automatically
			</p>

			</div>
		</div>
	
</body>
</html>