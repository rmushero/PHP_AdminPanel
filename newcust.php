<?php

require_once 'scripts/app_config.php';
require_once 'scripts/authorize.php';
require_once 'scripts/database_connection.php';


?>
<html>
<head>
<meta name="viewport" content="width=device-width">     
<title>New User</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrap">

<div id="top"></div>

<div id="content">

<h1>Customer Information</h1>
<form id="signup_form" action ="sync.php"
method ="POST" enctype="multipart/form-data">
<fieldset>
<label for="fname">First Name:</label>
<input type="text" name="fname" size="20" class ="required"/>

<label for="lname">Last Name:</label>
<input type="text" name="lname" size="20" class ="required"/><br><br>


<label for="address">Address:</label>
<input type="text" name="address" size="20" class ="required"/>

<label for="City">City:</label>
<input type="text" name="city" size="20" class ="required"/>

<label for="State">State and Zip Code:</label>
<input type="text" name="state" size="20" class ="required"/><br>

<label for="phone">Phone Number:</label>
<input type="text" name="phone" size="30" class ="required"/>

<label for="email">Email Address:</label>
<input type="text" name="email" size="30" class ="required" /><br><br>


<label for="scale">Scale:</label>
<input type="text" name="scale" size="30" class ="required" />

<label for="type">Project Type:</label>
<input type="text" name="type" size="30" class ="required "/><br/>

<label for="number">Customer Number(if CMB use CMB number):</label>
<input type="text" name="number" size="30" class ="required"/><br/>

</fieldset>
<br />


<fieldset class="center">
<input type="submit" value="Submit Information"/>
<input type="reset" value="Clear Form"/>
</fieldset>

</form>
</div>
<div id="footer">

<center>Your information will NOT be given to anyone not affiliated with circusmodelstore.com</center>	
</div>
</body>
</html>