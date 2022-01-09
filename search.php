<?php

require_once 'scripts/app_config.php';
require_once 'scripts/authorize01.php';
require_once 'scripts/database_connection.php';

?>
<html>
<head>
<meta name="viewport" content="width=device-width">
<title>Search</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrap">

<div id="top"></div>

<div id="content">

<div class="breadcrumbs">

<center>
						<a href="search.php">Search for Customer</a> &middot;
						<a href="newcust.php">New Customer</a> &middot;
						<a href="subscribers.php">Subscribers</a> &middot;
					
						
</center>
						</div>
<div id="content">

<h2> User Data</h2>

<p> Please enter both first and last name in the fields</p>
<form action="viewuser.php" method="POST">

<fieldset class="auto">
<fieldset>
<input type="text" id="search" name='fname' placeholder="First Name"
cols="7" rows="1"></input>
<input type="text" id="search" name='lname' placeholder="Last Name"
cols="7" rows="1"></input>

<br/>

<input type="submit" value="Find Customer"/>
<input type="reset" value="Restart"/>
</fieldset>
</fieldset>
</form>
</div>


<div id="footer">
<center>Database information as of 6/13/13</center>

</div>

</body>
</html>