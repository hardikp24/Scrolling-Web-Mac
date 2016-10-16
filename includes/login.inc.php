<?php
session_start();
include '../dbh.php';

$uid = $_POST['uid'];
$pass = $_POST['pass'];

	$sql = "SELECT * FROM user WHERE uid ='$uid' AND pass = '$pass'";
	$result = mysqli_query($conn, $sql);

	if (!$row = mysqli_fetch_assoc($result)) {
		# code...
		echo "Your User Name or Password is incorrect";
	} else{
		//echo "You are logged in!";
		$_SESSION['id'] = $row['id'];
	}
	header("Location: ../testphp.php");

?>