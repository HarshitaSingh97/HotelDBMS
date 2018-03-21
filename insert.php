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
<body>
<br>
<br>
<div class="ins">
<form method=post action=ins.php >
Enter Employee Id:<span style='color:red'>*</span> <input type=textbox name=id maxlength=5 minlength=5 style='float:right;color:black' placeholder=EmployeeId required></input>
<br>
<br>
Enter Employee Name:<span style='color:red'>*</span>  <input type=textbox name=nme style='float:right;color:black' placeholder=EmployeeName required></input>
<br>
<br>
Enter Employee Address:<span style='color:red'>*</span>  <input type=textarea name=add style='float:right;color:black' placeholder=EmployeeAddress required></input>
<br>
<br>
Enter Department No:<span style='color:red'>*</span>  <input type=textbox name=dno style='float:right;color:black' placeholder=Dept.no required></input>
<br>
<br>
Enter Employee Salary:<span style='color:red'>*</span>  <input type=textbox name=sal style='float:right;color:black' placeholder=EmployeeSalary required></input>
<br>
<br>
Enter Employee Ph no.1:<span style='color:red'>*</span>  <input type=textbox name=pno1 maxlength=10 style='float:right;color:black' placeholder=EmployeePhno. required></input>
<br>
<br>
Enter Employee Ph no.2: <input type=textbox name=pno2 style='float:right;color:black' maxlength=10 placeholder=AdditionalPhno.></input>
<br><br>
<input type=submit class="but" value=Insert style='border-radius:5px;padding:7px;margin:auto;display:block'></input>
<br>
</form>
</div>
</body>
</html>
_END;
pg_close($db_connection);
?>