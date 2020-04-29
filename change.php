<?php
	
	include_once 'dbh.php';

	$sql = "INSERT INTO removed SELECT FROM line ORDER BY ID LIMIT 1;";
	mysqli_query($conn,$sql);

	header("Location: storeside.php");