<?php

require_once 'scripts/app_config.php';
require_once 'scripts/database_connection.php';

// Potential PHP upload errors

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$username = trim($_REQUEST['username']);
$email = trim($_REQUEST['email']);
$password = trim($_REQUEST['password']);


$insert_sql = sprintf("INSERT INTO admin " .
                             "(first_name, last_name, username, " .
                              "password, email) " .
                      "VALUES ('%s', '%s', '%s', '%s', '%s');",
                      mysql_real_escape_string($first_name),
                      mysql_real_escape_string($last_name),
                      mysql_real_escape_string($username),
                      mysql_real_escape_string(crypt($password, $username)),
                      mysql_real_escape_string($email));
                      
// Insert the user into the database
mysql_query($insert_sql)
  or die(mysql_error());

// Redirect the user to the page that displays user information
header("Location: show_user.php?user_id=" . mysql_insert_id());
exit();
?>
