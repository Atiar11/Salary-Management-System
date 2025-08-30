<?php 
	$id = (isset($_GET['UserID']) ? $_GET['UserID'] : '');


	require_once ('login.php');
	 
	 $sqls = "SELECT * FROM `employees` where ID = '$id'";
	 $results = mysqli_query($conn, $sqls);
	 $employeen = mysqli_fetch_array($results);
	 $empName = ($employeen['Fname']);

	$sql = "SELECT ID, Fname, Designation,Experience FROM employees WHERE employees.ID = $id";
	$sql1 = "SELECT CurrentSalary FROM salarydetails WHERE eID = $id";

	$sql2 = "Select Fname, IncrementAmount, EffectiveDate From employees, salaryincrements Where employees.ID = $id and salaryincrements.sID = $id order by salaryincrements.IncrementAmount";

    $sql3 = "SELECT * FROM `SalaryInHand` WHERE seID = $id";
//echo "$sql";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql3);
$result3 = mysqli_query($conn, $sql2);
?>



<html>
<head>
	<title>Employee Panel | ABC Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
	
	<header>
		<nav>
			<h1>ABC Corp.</h1>
			<ul id="navli">


			    <li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>
		<!-- <h2>Welcome <?php echo "$empName"; ?> </h2> -->

		    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Employee Dashboard </h2>
    	<table>

			<tr bgcolor="6BB087">
				
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
   
    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Basic</h2>
    	

    	<table>

			<tr bgcolor="E0F301">

				<th align = "center">Basic</th>
				
			</tr>

			

			<?php
				while ($employee1 = mysqli_fetch_assoc($result1)) {
					echo "<tr>";
					

					
					echo "<td>".$employee1['CurrentSalary']."</td>";

				}


			?>

		</table>



		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Salary In Hand</h2>
    	

    	<table style="background-color:1D92AF">
		

			<tr>
				
				
				<th align = "center">Employee ID</th>
				<th align = "center">Net Salary</th>
				<th align = "center">Tax Deduction</th>
				<th align = "center">Fund</th>
				<th align = "center">Miscellanious</th>
				
				
			</tr>

			

			<?php
				while ($employee = mysqli_fetch_assoc($result2)) {
					

					echo "<tr>";
					
					
					
					echo "<td>".$employee['seID']." </td>";
					echo "<td>".$employee['NetSalary']."</td>";
					echo "<td>".$employee['TaxDeduction']."</td>";
					echo "<td>".$employee['Fund']."</td>";
					echo "<td>".$employee['OtherDeductions']."</td>";
					
				}


				


			?>
		</table>

		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Salary Increment</h2>
    	

    	<table style="background-color:1D92AF">
		

			<tr>
				
				
				<th align = "center">Name</th>
				<th align = "center">Increment Amount</th>
				<th align = "center">Effective Date</th>
				
				
			</tr>

			

			<?php
				while ($employee = mysqli_fetch_assoc($result3)) {
					

					echo "<tr>";
					
					
					
					echo "<td>".$employee['Fname']." </td>";
					echo "<td>".$employee['IncrementAmount']."</td>";
					echo "<td>".$employee['EffectiveDate']."</td>";
					
				}


				


			?>



   
<br>
<br>
<br>
<br>
<br>







	</div>


		</h2>


		
		
	</div>
</body>
</html>