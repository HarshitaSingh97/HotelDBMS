<?php
$db_connection = pg_connect("host=localhost dbname=hoteldb user=owner password=iamtheowner") or die("Could not connect");
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
<body style='font-size:15px;'>
<br>
<br>
<a href='insert.php'><input type=button value=Insert Details class="but"></input></a>
<a href='upd.php'><input type=button class="but" value=Update Details ></input></a>
<a href='del.php'><input type=button class="but" value=Delete Details ></input></a>
_END;


if($eid=='Owner01'){
	$query1="select * from branch";
    $result1=pg_query($db_connection, $query1);	
	$i = 0;
	echo "<body><br> <span class='det'>  Branch Details:</span><br><br>
	<table><tr>";
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
	
	
	


	$query2="select s_id,name,address,ph_no from supplier group by s_id,name,address,ph_no";
    $result2=pg_query($db_connection, $query2);	
	$i = 0;
	echo "<br><br>";
	echo "<br>  <span class='det'> Supplier Details:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result2))
	{
		$fieldName = pg_field_name($result2, $i);
		echo "<th >" . $fieldName . "</th>";
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




	
	$query3="select * from employee order by emp_id";
    $result3=pg_query($db_connection, $query3);
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Employee Details:</span><br><br><table cellpadding=5px style='width:100%;border:2px solid black;'><tr>";
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



	$query4="select * from customer c,booking b where c.cust_id=b.cust_id order by c.cust_id";
    $result4=pg_query($db_connection, $query4);
	$i = 0;
	echo "<br><br>";
	echo "<br> <span class='det'>  Customer Booking Details:</span><br><br><table><tr>";
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





	$query5="select * from menu";
    $result5=pg_query($db_connection, $query5);	
	$i = 0;
	echo "<br><br>";
	echo "<br>  <span class='det'> The Royal Suites Menu:</span><br><br><table><tr>";
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
 
 /*
 echo <<<_END
 <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Latest <span>From</span> the <span>Blog</span></h1>
                        <ul>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-1.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-2.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="content-left">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-3.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="content-left">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-4.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-5.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-6.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->
   </body>

</html>


_END;

*/

}

else{
	echo '<script language="javascript">';
	echo 'alert("Invalid User Role. Please try again!")';
	echo '</script>';
	header('refresh:0.5;url=index.html');
	}

pg_close($db_connection);
?>