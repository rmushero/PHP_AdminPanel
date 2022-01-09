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

	<div class="breadcrumbs">

<center>
						<a href="search.php">Search for Customer</a> &middot;
						<a href="newcust.php">New Customer</a> &middot;
						<a href="subscribers.php">Subscribers</a> &middot;
					
						
</center>
						</div>
					
  <div id="content">
    <div class="user_profile">
      <?php 
	                  $result = mysql_query("SELECT * FROM subscribers");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email Address</th>
<th>Phone Number</th>
<th>Scale</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
   echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
     echo "<td>" . $row['scale'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
	      
	      
      ?>
    </div>
  </div>
  <div id="footer"></div>
 </body>
</html>
