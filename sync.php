  <?php
require_once 'scripts/app_config.php';
require_once 'scripts/authorize.php';
require_once 'scripts/database_connection.php';
require_once 'scripts/view.php';
$usertable = "Customers";
$fname = trim($_REQUEST['fname']);
$lname = trim($_REQUEST['lname']);
$address = trim($_REQUEST['address']);
$city = trim($_REQUEST['city']);
$state = trim($_REQUEST['state']);
$phone = trim($_REQUEST['phone']);
$email = trim($_REQUEST['email']);
$scale = trim($_REQUEST['scale']);
$type = trim($_REQUEST['type']);
$number = trim($_REQUEST['number']);



$insert_sql ="INSERT INTO Customers" . "(First_Name, Last_Name, Address, City, State_Zip, Phone_Number, Email_Address, Scale, Project_Type, user_id)" . "Values('{$fname}','{$lname}', '{$address}', '{$city}', '{$state}', '{$phone}', '{$email}', '{$scale}', '{$type}', '{$number}');";


mysql_query($insert_sql) or die(mysql_error());



?>
<html>
<head>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<h2> Customer Data</h2>

Name: <?php echo $fname; ?> <?php echo $lname;?><br>
Customer Address: <?php echo $address; ?> <?php echo $city; ?> <?php echo $state; ?><br>
Phone Number: <?php echo $phone; ?><br>
Email Address: <?php echo $email; ?><br>
Scale: <?php echo $scale;?><br>
Project Type: <?php echo $type; ?><br>
Customer Number: <?php echo $number;?><br>


Search for Customer <a href="search.php">here</a>



</body>
</html>