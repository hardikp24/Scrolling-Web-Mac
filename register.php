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
					First Name: <input type="text" name="" placeholder="Martin" class="form-control">
				</div>	
			</div>
			
			<div class="row">
				<div class="col-xs-4">
					Last Name: <input type="text" name="" placeholder="Peter" class="form-control">
				</div>	
			</div>
			<div class="row">
				<div class="col-xs-4">
					Username  :<input type="text" name="" placeholder="MartinPeter12" class="form-control">
				</div>	
			</div>
			<div class="row">
						<div class="col-xs-6">
							Email ID  :<input type="Email" name="" placeholder="abc@example.com" class="form-control">
						</div>	
			</div>
			<div class="row">
						<div class="col-xs-4">
						Password  :<input type="password" name="" placeholder="Password" class="form-control">
						</div>	
			</div>
			<div class="row">
						<div class="col-xs-4">
							Confirmed Password:<input type="password" name="" placeholder="Type same Password again" class="form-control">	
						</div>	
			</div>
			<div class="row">
						<div class="col-xs-3">
							City      :<input type="" name="text" placeholder="Los Angeles" class="form-control">
						</div>	
			</div><br>

				<div class="control-group">Gender
					<div class="controls">
					<input name="gender" id="gender-0" value="Male" type="radio">
					Male
					</label>
					<input name="gender" id="gender-1" value="Female" type="radio">
					Female
					</label>
				</div>
				</div>
		</div>
	<button type="submit" class="btn btn-success">Register Here </button>
</form>

<!-- Registeration ends here-->

 <?php require('footer.php'); ?>
