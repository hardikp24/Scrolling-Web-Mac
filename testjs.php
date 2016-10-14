 <!DOCTYPE html>
<html>
<head>
	<title>Test Js</title>
	<link rel="stylesheet" type="text/css" href="">
	
<style type="text/css">
/*
essential styles:
these make the slideshow work
*/

	#slides {
	    position: relative;
	    height: 100%;
	    padding: 0px;
	    margin: 0px;
	    list-style-type: none;
	}

	.slide {
	    position: absolute;
	    left: 0px;
	    top: 0px;
	    width: 100%;
	    height: 100%;
	    opacity: 0;
	    z-index: 1;

	    -webkit-transition: opacity 1s;
	    -moz-transition: opacity 1s;
	    -o-transition: opacity 1s;
	    transition: opacity 1s;
	}

	.showing {
	    opacity: 1;
	    z-index: 2;
	}

	/*
non-essential styles:
just for appearance; change whatever you want
*/

	.slide {
	    font-size: 40px;
	    padding: 40px;
	    box-sizing: border-box;
	    background: #333;
	    color: #fff;
	}

	.slide:nth-of-type(1) {
	    background-image: url('Images/squad.jpg');
	}
	.slide:nth-of-type(2) {
	    background-image: url('Images/citylife.jpg');
	}
	.slide:nth-of-type(3) {
	    background-image: url('Images/nyc-street.jpg');
	}
	.slide:nth-of-type(4) {
	    background-image: url('Images/chicago-street.jpg');
	}
	.slide:nth-of-type(5) {
	    background-image: url('Images/urban-city-street.jpg');
	}
</style>

</head>

<body id="body">

<?php include('header.php'); ?>

<!--  FOR JAVASCRIPT SLIDE SHOW -->

<ul id="slides">
    <li class="slide showing">Squad Be Like..</li>
    <li class="slide">This is London Babyy!!</li>
    <li class="slide">New York City</li>
    <li class="slide"> Chicago Cute Ass</li>
    <li class="slide"> Downtoun LA</li>
</ul>

<script type="text/javascript">
	var slides = document.querySelectorAll('#slides .slide');
	var currentSlide = 0;
	var slideInterval = setInterval(nextSlide,2000);

	function nextSlide() {
	    slides[currentSlide].className = 'slide';
	    currentSlide = (currentSlide+1)%slides.length;
	    slides[currentSlide].className = 'slide showing';
	}
</script>

<!-- SLIDESHOW ENDS HERE  -->

<div class="main_body">

	<h1 id="heading">Testing JS Scripts</h1> 
	<h2>Entry Form</h2>
	<form name="myform" action="#" method="POST" onsubmit="return validateForm()">

		<h1 id="time"></h1><br> <!--Display date here -->
		
		<label>User Name:</label>
		<input type="text" name="uname"><br><br>
		<label>Password:</label>
		<input type="password" name="pass"><br><br>

		<label>Choose color to change Background</label>
		<select name="background" id="background" onchange="changeBackground(this)">
			<option value="#6B8E23">OLIVEDRAB</option>
			<option value="#98FB98">PALEGREEN</option>
			<option value="#2E8B57">SEAGREEN</option>
			<option value="#008B8B">DARKCYAN</option>
			<option value="#F4A460">SANDYBROWN</option>
			<option value="#DAA520">GOLDENROD</option>
			<option value="#FFD700">GOLD</option>		
			<option value="#A9A9A9">DARKGRAY</option>
			<option value="#4682B4">STEELBLUE</option>
			<option value="#D2B48C">TAN</option>
		</select><br><br>

		<button onmouseover="showDate()">What Day is today ?</button><br><br>

		<input type="submit" value="Login">
	</form>	
</div>



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

<?php include('footer.php') ?>
</body>
</html>