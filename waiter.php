<?php
$db_connection = pg_connect("host=localhost dbname=hoteldb user=waiter password=waiter") or die("Could not connect");
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
		<link rel="stylesheet" href="display.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
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
$str='DPS';
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
	echo "<body><br>  <span class='det'> Your Details:</span><br><br><table><tr>";
	while ($i < pg_num_fields($result1))
	{
		$fieldName = pg_field_name($result1, $i);
		echo "<th>" . $fieldName . "</th>";
		$i = $i + 1;
	}
	echo '</tr>';
	$i = 0;

	while ($row = pg_fetch_row($result1)) 
	{
		echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			echo "<td >" . $c_row . "</td>";
			next($row);
			$y = $y + 1;
		}
	echo '</tr>';
	$i = $i + 1;
	}
	pg_free_result($result1);
	echo '</table>';
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
	//	echo '</body></html>';
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