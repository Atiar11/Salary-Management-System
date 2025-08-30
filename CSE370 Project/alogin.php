<?php 
require_once ('login.php');
$sql = "SELECT * from employees";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | ABC Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>ABC Corp.</h1>
			<ul id="navli">
				<li><a class="homered" href="alogin.php">HOME</a></li>
				<li><a class="homeblack" href="viewemp.php">Employee Information</a></li>
				<li><a class="homeblack" href="salarystatus.php">Salary Status</a></li>
				<li><a class="homeblack" href="increment.php">Increment Details</a></li>
				<li><a class="homeblack" href="savings.php">Savings</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>

	<div class="divider"></div>
    <div id="divimg">

    </div>


    <img src="admin dashboard.png" height="500" width= "500" style="float: left; margin-right: 100px; margin-top: 35px; margin-left: 70px">


    <div style="margin-top: 175px">

        <h1
            style="font-family: 'Rancho', cursive; font-weight: 200; font-size: 50px; margin-top: 100px; text-align: center;">
            Welcome Admin Panel.</h1>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 30px ; text-align: center;">Manage employees easily
        </p>
    </div>
</body>
</html>
