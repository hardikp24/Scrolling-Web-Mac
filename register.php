<title>Register Here</title>
<?php include('header.php'); ?>


<div class="register_login">

	<!-- Login form initiate here-->
	<form name="loginForm" class="login" action="" method="POST" onsubmit=" return validateLogin()"> 
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
	<form name="registerForm" class="register" action="" method="POST" onsubmit=" return validateRegister()">
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
						Create Username  :<input type="text" name="uname" placeholder="MartinPeter12" class="form-control">
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
</div>

<script type="text/javascript">
	//validate Register form
	function validateRegister() {
		
		//store input values into js variable

		var fname = document.forms['registerForm']['fname'].value;
		var lname = document.forms['registerForm']['lname'].value;
		var uname = document.forms['registerForm']['uname'].value;
		var emailid = document.forms['registerForm']['emailid'].value;
		var pass = document.forms['registerForm']['pass'].value;
		var cpass = document.forms['registerForm']['cpass'].value;
		var city = document.forms['registerForm']['city'].value;
		var gender = document.forms['registerForm']['inlineRadioOptions'].value;

		//check null conditions
		if (fname == null || fname == "") {alert('First Name is required'); return false; }
		if (lname == null || lname == "") {alert('Last Name is required'); return false; }
		if (uname == null || uname == "") {alert('User Name is required'); return false; }
		if (emailid == null || emailid == "") {alert('Email ID is required'); return false; }
		if (pass == null || pass == "") {alert('Password is required'); return false; }
		if (cpass == null || cpass != pass) {alert('Password is not matched. Type same password again'); return false; }
		if (city == null || city == "") {alert('City name is required'); return false; }
		
		//check length conditions
		if (uname.length < 5) { alert('User name must be least 5 characters'); return false; }
		if (pass.length < 8) { alert('Password must be least 8 characters'); return false; }
		
	}

	//validate login form

	function validateLogin() {
		var uname = document.forms['loginForm']['uname'].value;
		if (uname == null || uname == "") {
			alert('Username is required');
			return false;
		}
		if (uname.length < 5) {
			alert('Username must be at least 5 characters');
			return false;
		}
		var pass = document.forms['loginForm']['pass'].value;
		if (pass == null || pass == "") {
			alert('Password is required');
			return false;
		}
		if (pass.length < 8) {
			alert('Password must contain at least 8 characters');
			return false;
		}
	}


</script>

 <?php require('footer.php'); ?>
