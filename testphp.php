<?php  
	include 'testhead.php';
?>

<div class="form-box">
	<div class="wrapper">
	<h2>Contact us here!</h2><br>
		<form action="feedbackForm.php" method="GET">
			<input type="text" name="c_name" placeholder="Name"><br>
			<input type="email" name="c_email" placeholder="Email Id"><br><!--
			<input type="radio" class="form-radio" name="gender" value="Male"> <p>Male</p><br>
			<input type="radio" class="form-radio" name="gender" value="Female"> <p>Female</p><br><br><br>-->
			<textarea name="c_msg" placeholder="Write query or Feedback Us Here"></textarea><br><br>
			<button type="submit">Submit</button>

		</form>
	</div>
</div>
	
</body>
</html>