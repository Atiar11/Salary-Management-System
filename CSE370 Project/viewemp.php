<?php

require_once ('login.php');
$sql = "SELECT * from `employees`";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title> Employee Information |  Admin Panel | ABC Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>ABC Corp.</h1>
			<ul id="navli">
                <li><a class="homeblack" href="alogin.php">HOME</a></li>
				<li><a class="homered" href="viewemp.php">Employee Information</a></li>
				<li><a class="homeblack" href="salarystatus.php">Salary Status</a></li>
				<li><a class="homeblack" href="increment.php">Increment Details</a></li>
                <li><a class="homeblack" href="absent.php">Attendance information</a></li>
				<li><a class="homeblack" href="savings.php">Savings</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Designation</th>
				<th align = "center">Experience</th>
				
			
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['ID']."</td>";
					echo "<td>".$employee['Fname']."</td>";
                    echo "<td>".$employee['Designation']."</td>";
                    echo "<td>".$employee['Experience']."</td>";

				

				}


			?>

		</table>
		
	
</body>
</html>
