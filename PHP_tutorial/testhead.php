<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Home | Testing PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #A9A9A9;">
<!--This is header page that we are gonna include to everywhere as possible-->
<header> <!--This is header on top -->
	<nav>
		<ul>
			<li><a href="testphp.php">Home</a></li>
			<?php 

				if (isset($_SESSION['id'])) /* We are going to check if user is already logged in then do this*/ {
					
				echo "<form action='includes/logout.inc.php'>
					<button>LOG OUT</button>
					</form>"; /* We gave user option to log out*/

				} else /* otherwise do this; Login to the system */ {
					
					echo 	"<form action='includes/login.inc.php' method='POST'>
								<input type='text' name='uid' placeholder='Username'>
								<input type='password' name='pass' placeholder='Password'>
								<button type='submit'>LOGIN</button>		
							</form>";
				}

			?>
			<li><a href="signup.php">Sign Up</a></li>

		</ul>
	</nav>
</header>