<!DOCTYPE html>
<html>
<head>
	<title>Test Js</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<center>
	<a href="index.php">Home</a>
	<div class="header">
		<h1>Testing JavaScript</h1>
		<p>With Hardik Patil</p>
	</div>

<h2>Entry Form</h2>
<form name="myform" action="#" method="POST" onsubmit="return validateForm()">
	<label>User Name:</label>
	<input type="text" name="uname"><br>
	<label>Password:</label>
	<input type="text" name="pass"><br>
	<input type="submit" value="Login">
</form>



</center>


<script type="text/javascript">
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
</script>



</body>
</html>


