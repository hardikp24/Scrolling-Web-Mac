<?php

$conn = mysqli_connect("localhost", "root", "", "logintest");

if (!$conn) {
	# code...
	die("Connection failed: ".mysqli_connect_error());
}

?>