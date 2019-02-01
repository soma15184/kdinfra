<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];

	$msg = "Name : $name , email : $email , Message : $msg";
	
	mail("soma15184@gmail.com","KDInfrastructures | Contact Us",$msg);
?>
