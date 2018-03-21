<?php
$db_connection = pg_connect("host=localhost dbname=hoteldb user=owner password=iamtheowner") or die("Could not connect");
$eid=$_COOKIE['eid'];
$pwd=$_COOKIE['pwd'];
$id=$_POST['id'];

$stat = pg_connection_status($db_connection);
if ($stat === PGSQL_CONNECTION_OK) {
    //echo 'Connection status ok';
}	
else 
{
    echo 'Connection status bad';
}

echo <<<_END
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>The Royal Suites-login</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate.min.css">

		<link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		
		<link rel="stylesheet" href="display.css">
		
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</head>
_END;



echo"<body>";
echo"<div class='ins2'>";

$str='E';
$empty='';
error_reporting(E_ALL ^ E_WARNING);
if(substr_compare($id,$str,0,1,true)==0){
	$query ="select * from employee where emp_id='$id'";
	$result=pg_query($db_connection, $query);
	if(pg_num_rows($result) == 0) echo "Employee Not Present In Records!";
    else{
        
	$query1 = "delete from employee where emp_id='$id'";
	$result1=pg_query($db_connection, $query1);
	
	echo "Delete Succesfull";
	}
}

else echo "Invalid Employee ID";
echo"</div>";

echo"</body>";
pg_close($db_connection);
?>