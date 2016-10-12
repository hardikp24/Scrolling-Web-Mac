<!DOCTYPE html>
<html>
<head>
	<title>Test Js</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body id="body">



<center>
	<a href="index.php">Home</a>
	<div class="header">

		<h1 id="heading">Testing JS Scripts</h1> 

		<p>With Hardik Patil<br> This is page only for testing... </p>
	</div>

<h2>Entry Form</h2>
<form name="myform" action="#" method="POST" onsubmit="return validateForm()">

	<h1 id="time"></h1><br> <!--Display date here -->
	
	<label>User Name:</label>
	<input type="text" name="uname"><br><br>
	<label>Password:</label>
	<input type="password" name="pass"><br><br>

	<label>Choose color to change Background</label>
	<select name="background" id="background" onchange="changeBackground(this)">
		<option value="orange">Orange</option>
		<option value="green">Green</option>
		<option value="blue">Blue</option>
	</select><br><br>

	<button onmouseover="showDate()">What Day is today ?</button><br><br>

	<input type="submit" value="Login">
</form>



</center>


<script type="text/javascript">

// form validation here 

function validateForm(){
	var uname = document.forms['myform']['uname'].value;
	if (uname == null || uname == "") {
		alert("User name is required");
		return false;
	}
	if (uname.length < 5) {
		alert("User name must be at least 5 character");
		return false;
	}
	
	var pass = document.forms['myform']['pass'].value;
	if (pass == null || pass == "") {
		alert("Password is required");
		return false;
	}
	if (pass.length < 5) {
		alert("Password must be at least 5 character");
		return false;
	}
}


//change background color 

function changeBackground(x){
	console.log(x.value);

	var body = document.getElementById('body');
	body.style.backgroundColor = x.value;
}

//Show current Date and Time on mouse hover 
function showDate(){
	var time = document.getElementById('time');
	time.innerHTML = Date();
}

</script>



</body>
</html>


