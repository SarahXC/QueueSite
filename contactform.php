<?php
	
	session_start();

	include_once 'dbh.php';


	// define variables and set to empty values
	$nameErr = "";
	if (empty($_GET["first_name"]) or empty($_GET["last_name"]) ) {
	$nameErr = "Name is required";
	} else {
	$fname = test_input($_GET["first_name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
		$nameErr = "Only letters allowed";
	}
	}

	if($_GET['fname'] != "" ){
		$firstname = mysqli_real_escape_string($conn,$_GET['fname']);
		$lastname = mysqli_real_escape_string($conn,$_GET['lname']);
		$number = mysqli_real_escape_string($conn,$_GET['number']);
		$email = mysqli_real_escape_string($conn,$_GET['email']);

	if(!is_null($_SESSION['end'])){
		$sql = "INSERT INTO line (first_name,last_name,phone_number,email) VALUES ('$firstname','$lastname','$number','$email');";
		mysqli_query($conn,$sql);

	}


	$sql = "SELECT id FROM line ORDER BY ID LIMIT 1;";
	$return = mysqli_query($conn,$sql);

	$lowest = mysqli_fetch_array($return)['id'];

	$sql = "SELECT * FROM line";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	$wait = 3;

	Print("Name: ".$firstname." ".$lastname."<br>Email:"." ".$email."<br>Phone Number:"." ".$number."<br>");
	Print("Position in Queue: ");

	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			if ($row['phone_number'] == $number) {
				$position = $row['id'] - $lowest + 1;
				$waittime = $position * $wait;
				Print ($position."<br>");
				Print("Estimated Wait Time:"." ".$waittime);
				break;
			}
			
		}
	}

		Print("<br>If your Queue number changes oddly or if there are any other issues, please contact *********");
	}

	$_SESSION['end'] = "TRUE";