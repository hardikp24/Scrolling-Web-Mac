<?php  
	include 'testhead.php';
?>


<?php 
	/* to get url; what info want from super global variable server;  */
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	/* if we do have this inside url, gonna check string position, it gonna variable which in our case is  $url, now we tell him what we want to check for inside this url, so say we going to check for string called error=empty  */

	/* if string position is in fact true or false like if it actually have this existing inside string position then do whatever down here  */
	if (strpos($url, 'error=empty') !== false) { 
		# code...
		echo "Fill out all fields!";
	}	
	else if (strpos($url, 'error=username') !== false) { 
		# code...
		echo "Username already exists!";
	}


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
				<button type='submit'>Register'</button>
			</form>";
	}

?>

</body>
</html>