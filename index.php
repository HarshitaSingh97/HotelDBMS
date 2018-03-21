<?php
    $db_connection = pg_connect("host=localhost dbname=DBNAME user=USERNAME password=PASSWORD");

echo <<<_END
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>The Royal Suites</title>
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
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/header.jpg" alt="">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#">
                                    <h1>The Royal Suites</h1>
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#hero-area">Home</a></li>
                                <li><a href="#login">Login</a></li>
                                <!--<li><a href="#blog">Blog</a>
                                <li><a href="#subscribe">news</a></li>
                                -->
                                <li><a href="#price">menu</a></li>
								<li><a href="#footer">contact info</a></li></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Featured <span>Works</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-4.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/slider/slider-img-4.jpg" alt="">
                            </div>
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    login start
    ============================== -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="height:400px;">
                        <!--<img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="images/cooker-img.png" alt="cooker-img">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Your <span>Restaurant’s</span> </br> Website Has To Look <span>Good</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </br>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
-->
					<p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
					<form action="login.php" method="post" style="margin:auto;display:block;height:400px;width:400px;" >
					<h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" ><span>Login</span></h1><br><br>
					<label style="font-size:18px;margin:auto;display:block">Enter Employee ID<input type="text" name="eid" placeholder="Employee ID" style="font-size:16px;font-style:normal;float:right;" required></input></label><br> 
					<br><br><label style="font-size:18px;margin:auto;display:block">Enter Password<input type="password" name="pwd" placeholder="Password" style="font-size:16px;font-style:normal;float:right;" required></input></label><br>
					<br><br><br><!--<input type="submit" style="font-size:18px;margin:auto;display:block;" value="Log In" class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms"></input>-->
					<input type="submit" class="btn btn-default pull-right wow bounceIn animated" data-wow-duration="500ms" data-wow-delay="1200ms" role="button" value="Log In" style="font-size:16px;margin:auto;display:block;visibility: visible; animation-duration: 500ms; animation-delay: 1200ms; animation-name: bounceIn;"></input>
					</form></p>
					</div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
    <!--
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                        <div class="pricing-list">
                            <div class="title">
                                <h3>Featured <span>on the week</span></h3>
                            </div>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Pancakes n' Such</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 25.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Homestyle Chicken Pot Pie</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 10.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Cereal, Panecillos y Frutas </h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 5.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Meat of Skewers</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 15.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                    </div>
                               </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Steak with a Garlic and Parsley Risotto</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 75.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Caesar Salad</h2>
                                            <div class="border-bottom"></div>
                                            <span>$ 7.00</span>
                                        </div>
                                        <p></p>
                                    </div>
                                </li>
                            </ul><!--
                            <a class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>-->
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
    <!--
    subscribe start
    ============================ -->
    <!--<section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUBSCRIBE <span>to our</span> NEWSLETTER</h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter your email to subscribe...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    CONTACT US  start
    ============================= -->
    <!--<section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>CONTACT US</span></h1>
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for <span>Email Alerts</span> </h3>
                        <form>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="text" class="form-control" placeholder="Write your email address here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                            </div>
                        </form>
                        <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">send your message</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
	<!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telephone</h4>
                                  <p>(080) 123 456 78- (080) 123 4567 89</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>Hosakarehalli, Bangalore</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>royalsuites@cuisine.com</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>LATEST <span>BLOG POSTS</span></h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><a href="#">March 9th, 2017</a></h4>
                                    <p>The healthy way to a person's heart</p>
                                </li>
                                <li>
                                    <h4><a href="#">February 22nd, 2017</a></h4>
                                    <p>Best dishes to add to your cook book</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="images/photo/photo-1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/photo/photo-2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/photo/photo-3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/photo/photo-4.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By <a href="http://www.themefisher.com">Themefisher</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>

_END;

pg_close($db_server);
?>
