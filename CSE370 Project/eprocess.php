<?php

require_once ('login.php');

$username = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `Users` WHERE Username = '$username' AND Password = '$password'";
$sqlid = "SELECT UserID from `Users` WHERE Username = '$username' AND Password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$empid = "";
if(mysqli_num_rows($result) == 1){
	
	$employee = mysqli_fetch_array($id);
	$empid = ($employee['UserID']);
	

	//echo ("logged in");
	//echo ("$empid");
	
	header("Location: elogin.php?UserID=$empid");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>