<?php

require_once 'scripts/app_config.php';
require_once 'scripts/authorize.php';
require_once 'scripts/database_connection.php';
require_once 'scripts/view.php';

// Get the user ID of the user to show
$user_id = $_REQUEST['user_id'];

// Build the SELECT statement
$select_query = "SELECT * FROM admin WHERE user_id = " . $user_id;

// Run the query
$result = mysql_query($select_query);
if ($result) {
  $row = mysql_fetch_array($result);
  $first_name     = $row['first_name'];
  $last_name      = $row['last_name'];
  $email          = $row['email'];
  $user_id          = $row['user_id'];

} else {
  handle_error("There was a problem finding your " .
               "information in our system.",
               "Error locating user with ID {$user_id}");

}

  page_start("User Profile");
?>
<html>
<head>
<meta name="viewport" content="width=device-width">
<title>Search</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../admin/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

	<div class="breadcrumbs">

<center>
						<a href="search.php">Search for Customer</a> &middot;
						<a href="newcust.php">New Customer</a> &middot;
						<a href="subscribers.php">Subscribers</a> &middot;
						<a href="upload.php">Upload an Image</a> &middot;
					
						
</center>
						</div>
					
  <div id="content">
    <div class="user_profile">
      <h1><?php echo "{$first_name} {$last_name}";?></h1>
      
      <p> Name: <?php echo "{$first_name} {$last_name}";?></p>
      <p>Email:<?php echo "$email";?></p>
      <p>User Id: <?php echo "$user_id";?>
    </div>
  </div>
  <div id="footer"></div>
 </body>
</html>
