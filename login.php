<?php

$eid = $_POST['eid'];
$pwd = $_POST['pwd'];
setcookie('eid',$eid, time()+30*24*60*60);
setcookie('pwd',$pwd, time()+30*24*60*60);
$val=1;
switch ($pwd) {
    case 'iamtheowner':
        $redirect = 'owner.php';
    break;
    case 'hotelmgr':
        $redirect = 'manager.php';
    break;
    case 'waiter':
        $redirect = 'waiter.php';
    break;
	case 'hotelchef':
        $redirect = 'chef.php';
    break;
	default:$val=0;
    //$redirect = '#';
    echo '<script language="javascript">';
	echo 'alert("Invalid User Role. Please try again!")';
	echo '</script>';
	header('refresh:0.5;url=index.html');
	break;
	
}
if($val=1){
	error_reporting(E_ALL ^ E_NOTICE);  
	header('Location: ' . $redirect);
}
/*
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
<body>
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


_END;*/

?>