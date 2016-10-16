<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Testing PHP</title>
</head>
<body>
<!--Login here-->
<h2>Already have an account? Login here</h2>
	<form action="login.php" method="POST">
		<input type="text" name="uid" placeholder="Username">
		<input type="password" name="pass" placeholder="Password">
		<input type="submit" name="" value="Login"><br><br>
	</form>

<?php 
	if (isset($_SESSION['id'])) {
		# code...
		echo $_SESSION['id'];
	} else {
		//echo "Hey You are not logged in!";
	}

?>

<!--Register here-->
<h2>Register Here</h2>
	<form action="signup.php" method="POST">
		<input type="text" name="fname" placeholder="First Name"><br><br>
		<input type="text" name="lname" placeholder="Last Name"><br><br>
		<input type="text" name="uid" placeholder="Create User Name"><br><br>
		<input type="password" name="pass" placeholder="Create Password"><br><br>
		<input type="text" name="city" placeholder="City"><br><br>
		<input type="submit" name="" value="Register">
	</form>
<br><br>
<!--Logout here-->
<form action="logout.php">
	<button>LOG OUT</button>
</form>
	
</body>
</html>