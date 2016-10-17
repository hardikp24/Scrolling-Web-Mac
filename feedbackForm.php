<?php
if (isset($_GET['c_name']) && isset($_GET['c_email']) && isset($_GET['c_msg'])) {
 	# code...
 	$c_name = $_GET['c_name'];
 	$c_email = $_GET['c_email'];
 	$c_msg = $_GET['c_msg'];

 	if (!empty($c_name) && !empty($c_email) && !empty($c_msg)) {

 		$to = 'hardik.patil2494@gmail.com';
 		$subject = 'Feedback Form Submitted';
 		$body = $c_name."\n".$c_msg;
 		$headers = 'From '.$c_email;

 		if (mail($to, $subject, $body, $headers)) {
 			
 			echo "Thanks for contacting us. We will be in touch soon!";
 		}
 		else{
 			echo "Sorry, an error occured. Please try again!";
 		}
 	}


 }
else{
	echo "All fields are required!";
}

?>