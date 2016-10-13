<?php include('header.php'); ?>

<!-- Login form initiate here-->
<form class="login" action="" method=""> 
	<h3>Already have an accont? Login Here</h3> <br>
	<div class="row col-xs-10">

		<div class="form-group">
			Login ID: 	<input type="text" placeholder="Email" class="form-control">
			Password: 	<input type="password" placeholder="Password" class="form-control">

			<div class="checkbox">
		    	<label><input type="checkbox"> Remember me</label>
		  	</div>

			<button type="submit" class="btn btn-success">Sign in</button>
		
		</div>
	
	</div>
		
</form>
<!-- Login form ends here-->

<!-- Registeration here -->	
<form class="register" action="" method="POST">
	<h2>Create New Avatar here</h2>	
		<div class="form-group">

			<div class="row">
				<div class="col-xs-4">
					First Name: <input type="text" name="fname" placeholder="Martin" class="form-control">
				</div>	
			</div>
			
			<div class="row">
				<div class="col-xs-4">
					Last Name: <input type="text" name="lname" placeholder="Peter" class="form-control">
				</div>	
			</div>
			<div class="row">
				<div class="col-xs-4">
					Username  :<input type="text" name="uname" placeholder="MartinPeter12" class="form-control">
				</div>	
			</div>
			<div class="row">
						<div class="col-xs-6">
							Email ID  :<input type="Email" name="emailid" placeholder="abc@example.com" class="form-control">
						</div>	
			</div>
			<div class="row">
						<div class="col-xs-4">
						Password  :<input type="password" name="pass" placeholder="Password" class="form-control">
						</div>	
			</div>
			<div class="row">
						<div class="col-xs-4">
							Confirmed Password:<input type="password" name="cpass" placeholder="Type same Password again" class="form-control">	
						</div>	
			</div>
			<div class="row">
						<div class="col-xs-3">
							City      :<input type="text" name="city" placeholder="Los Angeles" class="form-control">
						</div>	
			</div><br>

			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Male
			</label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Female
			</label>

		</div>

	<button type="submit" class="btn btn-success">Register Here </button>
</form><br><br>

<!-- Registeration ends here-->

 <?php require('footer.php'); ?>
