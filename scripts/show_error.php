<?php
  require_once "app_config.php";

  if (isset($_REQUEST['error_message'])) {
    $error_message = preg_replace("/\\\\/", '', 
                                  $_REQUEST['error_message']);
  } else {
    $error_message = "Something went wrong, and that's " .
                     "how you ended up here.";
  }

  if (isset($_REQUEST['system_error_message'])) {
    $system_error_message = preg_replace("/\\\\/", '',
                            $_REQUEST['system_error_message']);  
  } else {
    $system_error_message = "No system-level error message was reported.";
  }
?>

<html>
 <head>
 </head>

 <body>
  <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
  <div id="example">Uh oh... sorry!</div>
  <div id="content">
    <h1>We're really sorry...</h1>
      <?php echo $error_message; ?>
      <span></p>
    Shit went wrong!
    <?php
      debug_print("<hr />");
      debug_print("<p>The following system-level message was received: <b>{$system_error_message}</b></p>");
    ?>
  </div>
  <div id="footer"></div> 
 </body>
</html>
