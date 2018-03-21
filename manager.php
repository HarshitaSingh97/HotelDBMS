<?php
$db_connection = pg_connect("host=localhost dbname=hoteldb user=manager password=hotelmgr") or die("Could not connect");
$eid=$_COOKIE['eid'];
$pwd=$_COOKIE['pwd'];

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

$str='DPM';
$query="select d_no from employee where emp_id='$eid'";
$result=pg_query($db_connection, $query);
$row = pg_fetch_row($result);
//echo $row[0];
$val=$row[0];
error_reporting(E_ALL ^ E_WARNING);
if(substr_compare($val,$str,0,3,true)==0){
	if(pg_num_rows($result)==1){
	$query1="select * from employee where emp_id='$eid'";
    $result1=pg_query($db_connection, $query1);
	$i = 0;
	echo "<body><br> <span class='det'>  Your Details:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result1))
	{
		$fieldName = pg_field_name($result1, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result1)) 
	{
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result1);
	echo "</table>";
	
	
	


	$query2="select * from employee where emp_id not in (select emp_id from employee where emp_id='$eid')";
    $result2=pg_query($db_connection, $query2);	
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Other Employee Details:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result2))
	{
		$fieldName = pg_field_name($result2, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result2)) 
	{
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result2);
	echo "</table>";







	
	
	$query3="select * from booking order by booking_id,start_date";
    $result3=pg_query($db_connection, $query3);	
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Booking Details:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result3))
	{
		$fieldName = pg_field_name($result3, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result3)) 
	{
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result3);
	echo "</table>";







	
	
	
	$query4="select * from menu";
    $result4=pg_query($db_connection, $query4);	
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  The Royal Suites Menu:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result4))
	{
		$fieldName = pg_field_name($result4, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result4)) 
	{
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result4);
	echo "</table>";







	
	
	
	$query5="select address,ph_no from supplier where s_id='SN002'";
    $result5=pg_query($db_connection, $query5);	
	$i = 0;
	echo "<br><br>";
	echo "<br>  <span class='det'> Contact details for supplier S0002:</span><br><br>
	<table ><tr>";
	while ($i < pg_num_fields($result5))
	{
		$fieldName = pg_field_name($result5, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result5)) 
	{
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result5);
	echo "</table>";	







	
	
	
	$query6="select d.d_no,e.emp_id, e.name,d.d_name from employee e, dept d where d.d_no=e.d_no and d.d_no like 'DPC%'";
    $result6=pg_query($db_connection, $query6);	
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Kitchen Staff details:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result6))
	{
		$fieldName = pg_field_name($result6, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result6)) 
	{
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result6);
	echo "</table>";







	
	
	
	$query7="select c.cust_id,sum(o.amount) from customer c, orders o group by c.cust_id,o.cust_id having c.cust_id=o.cust_id and sum(o.amount)>300";
    $result7=pg_query($db_connection, $query7);	
	$i = 0;
	echo "<br><br>";
	echo "<br>  <span class='det'> Customers with a bill greater than 300:</span><br><br><table ><tr>";
	while ($i < pg_num_fields($result7))
	{
		$fieldName = pg_field_name($result7, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result7)) 
	{
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td >" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result7);
	echo "</table>";

	
	
	
	
	
	
	
	
	$query8="select * from foodbill";
    $result8=pg_query($db_connection, $query8);	
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Display all food bills:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result8))
	{   
		$fieldName = pg_field_name($result8, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result8)) 
	{   
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result8);
	echo "</table>";






	
	
	
	$query8="select * from roombill";
    $result8=pg_query($db_connection, $query8);	
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Display all room bills:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result8))
	{   
		$fieldName = pg_field_name($result8, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result8)) 
	{   
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result8);
	echo "</table>";
	
	
	
	
	
	$query8="select * from finalbill";
    $result8=pg_query($db_connection, $query8);	
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Display all final bills:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result8))
	{   
		$fieldName = pg_field_name($result8, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo "</tr>";
	$i = 0;

	while ($row = pg_fetch_row($result8)) 
	{   
		echo "<tr>";
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td>" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo "</tr>";
	$i = $i + 1;
	}
	pg_free_result($result8);
	echo "</table>";
	}
	else{
	echo '<script language="javascript">';
	echo 'alert("Invalid ID. Please try Again!")';
	echo '</script>';
	header('refresh:0.5;url=index.html');
	}	
}
else{
	echo '<script language="javascript">';
	echo 'alert("Invalid User Role. Please try again!")';
	echo '</script>';
	header('refresh:0.5;url=index.html');
	}


pg_close($db_connection);
?>