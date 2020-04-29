

<?php
	include_once '../dbh.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Storeside</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			font-family: monospace;
			font-size: 25px;
			text-align: Left;
		}
		th {
			background-color: black;
			color: white;
		}
		tr:nth-child(odd){
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>

<h3>People in the Queue:</h3>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th></th>
		<th>Phone Number</th>
		<th>Email</th>
	</tr>
	<?php

	$sql = "SELECT id, first_name, last_name, phone_number, email FROM line;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo"<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["phone_number"]."</td><td>".$row["email"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "Empty queue";
	}

	$conn -> close();
	
	?>
</table>
<h3>Add People:</h3>
	<form action="contactform_backend.php" method="POST">
	  <label for="fname">First name:</label><br>
	  <input type="text" id="fname" name="fname"><br>
	  <label for="lname">Last name:</label><br>
	  <input type="text" id="lname" name="lname"><br>
	  <label for="number">Phone Number:</label><br>
	  <input type="text" id="number" name="number"><br>
	  <label for="email">Email</label><br>
	  <input type="text" id="email" name="email"><br><br>

	  <button type="submit" name="submit">Queue up</button>
	</form>
	<br>


<h3>Row Operations:</h3>
<form action="remove.php">
	<button type="remove" name = "remove">Remove Top</button>
</form>

</body>
</html>