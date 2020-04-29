<?php
	include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$sql = "SELECT id FROM line ORDER BY ID LIMIT 1;";
		$return = mysqli_query($conn,$sql);

		$lowest = mysqli_fetch_array($return)['id'];

		$sql = "SELECT * FROM line";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo $row['first_name']." ". $row['last_name']. " " . $row['phone_number'] . " " . $row['email'] . "<br>";
			}
		}

	?>

</body>
</html>