<?php

require_once ('login.php');
$sql = "SELECT salaryincrements.IncrementID, salaryincrements.sID, employees.Fname, salaryincrements.EffectiveDate, salaryincrements.IncrementAmount FROM `salaryincrements` INNER JOIN employees WHERE salaryincrements.sID = employees.ID";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Increment |  Admin Panel | ABC Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>ABC Corp.</h1>
			<ul id="navli">
                <li><a class="homeblack" href="alogin.php">HOME</a></li>
				<li><a class="homeblack" href="viewemp.php">Employee Information</a></li>
				<li><a class="homeblack" href="salarystatus.php">Salary Status</a></li>
				<li><a class="homered" href="increment.php">Increment Details</a></li>
                <li><a class="homeblack" href="absent.php">Attendance information</a></li>
				<li><a class="homeblack" href="savings.php">Savings</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">IncrementID</th>
				<th align = "center">Salary ID</th>
				<th align = "center">Name</th>
				<th align = "center">Effective Date</th>
				<th align = "center">Increment Amount</th>
				
			
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['IncrementID']."</td>";
					echo "<td>".$employee['sID']."</td>";
                    echo "<td>".$employee['Fname']."</td>";
                    echo "<td>".$employee['EffectiveDate']."</td>";
                    echo "<td>".$employee['IncrementAmount']."</td>";

				

				}


			?>

		</table>
		
	
</body>
</html>
