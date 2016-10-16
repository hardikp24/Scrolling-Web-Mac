<?php

session_start();
include '../dbh.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];
$city = $_POST['city'];

$sql = "INSERT INTO user (fname, lname, uid, pass, city) VALUES ('$fname', '$lname', '$uid', '$pass', '$city')";

$result = mysqli_query($conn, $sql);

header("Location: ../testphp.php");

?>