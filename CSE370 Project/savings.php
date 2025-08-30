<?php

require_once ('login.php');
$sql = "SELECT savings.SavingsID, savings.saID, employees.Fname, savings.TotalSavings FROM `savings` INNER JOIN employees WHERE savings.saID = employees.ID";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Savings |  Admin Panel | ABC Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>ABC Corp.</h1>
			<ul id="navli">
                <li><a class="homeblack" href="alogin.php">HOME</a></li>
				<li><a class="homeblack" href="viewemp.php">Employee Information</a></li>
				<li><a class="homered" href="salarystatus.php">Salary Status</a></li>
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

				<th align = "center">SavingsID</th>
				<th align = "center">Salary ID</th>
				<th align = "center">Name</th>
				<th align = "center">Total Savings</th>
				
			
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['SavingsID']."</td>";
					echo "<td>".$employee['saID']."</td>";
                    echo "<td>".$employee['Fname']."</td>";
                    echo "<td>".$employee['TotalSavings']."</td>";

				

				}


			?>

		</table>
		
	
</body>
</html>
