<?php

session_start();
include '../dbh.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];
$city = $_POST['city'];

 if (empty($fname)) {

 	//Now if we want to include error msg I need to write it into the url when i go back to sign up page and you might be thinking well if you include something into the URL is not gonna take us back to the correct page but there's little PHP trick you can do where you can go and type '?' behind actual url and its going to see the rest of the whatever riding in here as not part of the actual URL but extra information instead we need to use inside the page that we are going to so i can access an error ,; its just like we riding get method that visible inside url called empty here.

 	header("Location: ../signup.php?error=empty"); 
 	exit();
 }
 if (empty($lname)) {
 	header("Location: ../signup.php?error=empty");
 	exit();
 }
 if (empty($uid)) {
 	header("Location: ../signup.php?error=empty");
 	exit();
 }
 if (empty($pass)) {
 	header("Location: ../signup.php?error=empty");
 	exit();
 }
 if (empty($city)) {
 	header("Location: ../signup.php?error=empty");
 	exit();
 }
else { /* If inputs are not empty do this */

// Here down we check if user name already exist or not 
$sql = "SELECT uid FROM user WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);
$uidcheck = mysqli_num_rows($result); //num_rows return either 1(if we have a result) or 0(if we don't) based on resulted data already exists or not.

	if ($uidcheck > 0) { 
		header("Location: ../signup.php?error=username");
		echo ""; //error msg and send it back to sign-up page 
		exit();
	} else {

		$sql = "INSERT INTO user (fname, lname, uid, pass, city) VALUES ('$fname', '$lname', '$uid', '$pass', '$city')";
		$result = mysqli_query($conn, $sql);
		header("Location: ../testphp.php");	
	}
}

?>