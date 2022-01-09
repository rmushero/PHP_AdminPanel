
<?php
$allowedExts = array("pdf","doc", "docx");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "application/pdf")
		|| ($_FILES["file"]["type"] == "application/doc")
		|| ($_FILES["file"]["type"] == "application/docx"))
	&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		if (file_exists("catalog/" . $_FILES["file"]["name"]))
		{
?>
	<html>
	<!DOCTYPE html>
<html>
	<head>
	<title>Circus Model Store</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="../circus/images/favicon.png" type="image/png"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<script type="text/javascript" src="/lib/jquery-1.9.0.min.js"></script>
	</head>
<center><h1>CIRCUS MODEL STORE</h1></center>
	<div class="breadcrumbs">

<center>
						<a href="/index.html">Home</a> &middot;
						<a href="/services">Services</a> &middot;
						<a href="/aboutus">About us</a> &middot;
						<a href="/contactus">Contact Us</a> &middot;
						<a href="/gallery">Gallery</a>
</center>
						</div>
<body>
<div id="content">
<div id="feature">
</div>
<div class="article column1">
<?php echo "Upload: " . $_FILES["file"]["name"] . "<br>"; ?>
<?php echo "File already exists maybe change the name of the one you're trying to upload."; ?>
</div>
</div>
</body>
<footer>
</footer>
</html>


	</html>

		<?php

		}

		else
		{

?>

			<html>


	<!DOCTYPE html>
<html>
	<head>
	<title>Circus Model Store</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="../circus/images/favicon.png" type="image/png"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<script type="text/javascript" src="/lib/jquery-1.9.0.min.js"></script>
	</head>
<center><h1>CIRCUS MODEL STORE</h1></center>
	<div class="breadcrumbs">

<center>
						<a href="/index.html">Home</a> &middot;
						<a href="/services">Services</a> &middot;
						<a href="/aboutus">About us</a> &middot;
						<a href="/contactus">Contact Us</a> &middot;
						<a href="/gallery">Gallery</a>
</center>
						</div>
<body>
<div id="content">
<div id="feature">

</div>

<div class="article column1">
<?php echo "Upload: " . $_FILES["file"]["name"] . "<br>"; ?>
<?php move_uploaded_file($_FILES["file"]["tmp_name"],
				"catalog/" . $_FILES["file"]["name"]);
			echo "Stored in: " . "catalog/" . $_FILES["file"]["name"]; ?>
</div>
</div>
</body>
<footer>
</footer>
</html>
<?php


//define the receiver of the email
$to = "rmushero@gmail.com";
//define the subject of the email
$subject = "update catalog!";
//define the message to be sent. Each line should be separated with \n
$message = "update to the latest catalog had been submitted adjust the file";
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From:fwd@circusmodelstore.com";
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );

		}
	}
}

else
{
	echo "Invalid file";
}
?>
       