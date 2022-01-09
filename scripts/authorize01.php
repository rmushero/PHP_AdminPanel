<?php

if ((!isset($_COOKIE['user_id'])) || 
    (!strlen($_COOKIE['user_id']) > 0)) {
  header('Location: signin01.php?' .
         'error_message=You must login to see this page.');
  exit;
}
?>
