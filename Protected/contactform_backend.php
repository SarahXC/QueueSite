<?php
	
	include_once 'dbh.php';

	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$number = $_POST['number'];
	$email = $_POST['email'];

	$sql = "INSERT INTO line (first_name,last_name,phone_number,email) VALUES ('$firstname','$lastname','$number','$email');";
	mysqli_query($conn,$sql);

	header("Location: storeside.php");