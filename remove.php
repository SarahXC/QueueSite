<?php
	
	include_once 'dbh.php';

	$sql = "DELETE FROM line ORDER BY ID LIMIT 1;";
	mysqli_query($conn,$sql);

	header("Location: storeside.php");