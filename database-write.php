<?php

	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['tele']));
	$message = Trim(stripslashes($_POST['mess']));

	//connect to database
	include "db-info.php";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//write to database
	$query = "INSERT INTO contacts (name, email, telephone, message) VALUES ('$name', '$email', '$phone', '$message')";

	$result = mysqli_query($connection, $query);

	//check if it did something
	$NumberOfRowsAffected = mysqli_affected_rows($connection);

	if($NumberOfRowsAffected < 1 ) {
 		die('No records were written to the database. Waaaa!');
	} 

	//close connection
	mysqli_close($connection);

	//redirect
	header("Location: index.php");
?>