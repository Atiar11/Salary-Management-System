<?php

require_once ('login.php');

$email = $_POST['uid'];
$password = $_POST['apwd'];

$sql = "SELECT * from `Admin` WHERE aUsername = '$email' AND apassword = '$password'";

//echo "$sql";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
	

	//echo ("logged in");
	header("Location:alogin.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>
