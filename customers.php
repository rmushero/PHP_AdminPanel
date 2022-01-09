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
	                  $result = mysql_query("SELECT * FROM Customers");

echo "<table border='1'>
<tr>
<th>User Id</th>
<th>First Name</th>
<th> Last Name </th>
<th>Address </th>
<th>City </th>
<th>State_Zip </th> 
<th> Phone_Number </th>
<th> Email_Address </th>
<th> Scale </th> 
<th> Project_Type </th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['user_id'] . "</td>";
  echo "<td>" . $row['First_Name'] . "</td>";
  echo "<td>" . $row['Last_Name'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['State_Zip'] . "</td>";
  echo "<td>" . $row['Phone_Number'] . "</td>";
  echo "<td>" . $row['Email_Address'] . "</td>";
  echo "<td>" . $row['Scale'] . "</td>";
  echo "<td>" . $row['Project_Type'] . "</td>";

  echo "</tr>";
  }
echo "</table>";
	      
	      
      ?>
    </div>
  </div>
  <div id="footer"></div>
 </body>
</html>