    <?php
require_once 'scripts/app_config.php';
require_once 'scripts/authorize.php';
require_once 'scripts/database_connection.php';


            //These variable values need to be changed by you before deploying

    $usertable = "Customers";
 	$yourfield1 = "First_Name";
 	$yourfield2 = "Last_Name";
  	$yourfield3 = "Address";
  	$yourfield9 = "City";
  	$yourfield10 = "State_Zip";
   	$yourfield4 = "Phone_Number";
   	$yourfield5 = "Email_Address";
   	$yourfield6 = "Scale";
   	$yourfield7 = "Project_Type";
   	$yourfield8 = "user_id";
   	$fname = $_POST['fname'];
   	$lname = $_POST['lname'];
           
              //Connecting to your database
          

            //Fetching from your database table.
            $query = "SELECT * FROM $usertable WHERE First_Name LIKE '$fname%' and LAST_NAME LIKE '$lname%'";
           
            //echo $query;
            $result = mysql_query($query);
      
           
           
 if ($result) {
                while($row = mysql_fetch_array($result)) {
                    $first_name = $row["$yourfield1"];
                    $last_name  = $row["$yourfield2"];   
					$address = $row["$yourfield3"];
                    $phone = $row["$yourfield4"];
                    $email = $row["$yourfield5"];
                    $scale = $row["$yourfield6"];
                    $type = $row["$yourfield7"];
                    $number = $row["$yourfield8"];
                    $city = $row["$yourfield9"];
                    $state = $row["$yourfield10"];
         


                }
                    }

            ?>


<head>
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="viewport" content="width=device-width"/>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<h2> User Data</h2>

Name:<?php echo $first_name; ?> <?php echo $last_name;?><br>
Customer Address: <?php echo $address; ?> <?php echo $city; ?> <?php echo $state; ?><br>
Phone Number:<?php echo $phone; ?><br>
Email Address:<?php echo $email; ?><br>
Scale: <?php echo $scale;?><br>
Project Type: <?php echo $type; ?><br>
Customer Number:<?php echo $number;?><br>


<br>
<br>



<center>Back to <a href="search.html">Search</a></center>






</span>

</body>

<footer>
</footer>
</html>