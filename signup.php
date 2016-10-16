<?php  
	include 'testhead.php';
?>


<?php 
	if (isset($_SESSION['id'])) { /*This session variable gonna check if id column from DB set or not*/
		echo 'My user id is '.$_SESSION['id']; /*It gonna display your user ID*/
	} else {
		echo "Hey You are not logged in!";
	}

?>

<!--Register here-->

<?php
	if (isset($_SESSION['id'])) {/*When User clicks on sign up option, this line gonna check if user already logged in or not */
		echo "You are already logged in!"; /*if Session Id is set means user already logged in*/
	} 

	else{ /* Otherwise create register for new account*/

		echo "<h1>Register Here</h1><br>
			<form action='includes/signup.inc.php' method='POST'>
				<input type='text' name='fname' placeholder='First Name'><br><br>
				<input type='text' name='lname' placeholder='Last Name'><br><br>
				<input type='text' name='uid' placeholder='Create User Name'><br><br>
				<input type='password' name='pass' placeholder='Create Password'><br><br>
				<input type='text' name='city' placeholder='City'><br><br>
				<input type='submit' value='Register'>
			</form>";
	}

?>

</body>
</html>