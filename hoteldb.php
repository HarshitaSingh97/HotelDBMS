<?php

//echo "Thankyou for making a donation of ₹$amt for these lovelies! You help make this world a better place!";

/*
$servername = "localhost";
$username = "root";
$password = "saveAlife";
$db_database = "hoteldb";
// Create connection
$db_server = mysql_connect('localhost', 'root', 'saveAlife','hoteldb'); 

// Check connection
if (!$db_server) {
    die("Connection failed: " . mysqli_connect_error());
}


mysql_select_db('hoteldb', $db_server)

or die("Unable to select database: " . mysql_error());

/*

$fn = $_POST['first-name'];

$ln = $_POST['last-name'];

$add1 = $_POST['address-1'];

$city = $_POST['city'];

$st = $_POST['state'];

$zip = $_POST['zip'];

$dph = $_POST['daytime-phone'];

$eph = $_POST['evening-phone'];

$eid = $_POST['email-address'];

$phtime = $_POST['contact-time'];
//static $date;
//echo $_POST['First_Name'];
//
	//if($_POST['Event']=='Seminar') $date="2016-11-16";
//	elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	//elseif($_POST['Event']=='dogE') $date="2016-11-30";
	//elseif($_POST['Event']=='catE') $date="2016-11-19";
	//elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	
	
//$query = "INSERT INTO adopt(fname,lname,addr1,city,state,zip,dphno,ephno,eid,cntct_time) VALUES('$fn','$ln','$add1','$city','$st','$zip','$dph','$eph','$eid','$phtime')";

if (!mysql_query($query, $db_server))

echo "INSERT failed: $query<br>" .

mysql_error() . "<br><br>";
*/
echo <<<_END
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="hoteldb.css">
</head>
<body><h1 align="center" style="color:blue;">Welcome to the page :)</h1>
<form action="" method="post" class="form1">
Enter Employee ID<input type="text" placeholder="Employee ID" style="float:right;"></input><br> 
<br><br>Enter Password<input type="password" placeholder="Password" style="float:right;"></input><br>
<br><br><br><input type="submit" class="submit" value="Login" ></input>
</form>
</body>

</html>


_END;

//mysql_close($db_server);
?>