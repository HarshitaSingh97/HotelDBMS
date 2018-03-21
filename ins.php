<?php
$db_connection = pg_connect("host=localhost dbname=hoteldb user=owner password=iamtheowner") or die("Could not connect");
$eid=$_COOKIE['eid'];
$pwd=$_COOKIE['pwd'];
$id=$_POST['id'];
$name=$_POST['nme'];
$add=$_POST['add'];
$dno=$_POST['dno'];
$sal=$_POST['sal'];
$pno1=$_POST['pno1'];
$pno2=$_POST['pno2'];

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



$str='E';
$empty='';
error_reporting(E_ALL ^ E_WARNING);
if(substr_compare($id,$str,0,1,true)==0){
	$query ="select * from employee where emp_id='$id'";
	$result=pg_query($db_connection, $query);
	if(pg_num_rows($result) == 0)
    {
        
	$query1 = "INSERT INTO employee VALUES('$id','$name','$add','$dno','$sal')";
	$query2 = "INSERT INTO emp_ph VALUES('$id','$pno1')";
	$result1=pg_query($db_connection, $query1);
	$result2=pg_query($db_connection, $query2);
	
		if(substr_compare($pno2,$empty,0,10,true)!=0){
			$query3 = "INSERT INTO emp_ph VALUES('$id','$pno2')";
			$result3=pg_query($db_connection, $query3);

		}
		echo "<body>";
		echo"<div class='ins2'>";
		echo "Insert Successful";
		echo "</div>";
	}
	else echo "<div class='ins2'>Employee Already Exists!</div>";
}
else echo "<div class='ins2'>Invalid Employee ID</div>";
echo"</body>";
pg_close($db_connection);
?>