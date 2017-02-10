<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'finaldb');
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)
or die("Failed to connect to server!" .mysqli_connect_error());

	$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$phone= mysqli_real_escape_string($con, $_POST['phone']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$password2 = mysqli_real_escape_string($con, $_POST['password2']);

	$password = md5($password);

	$query = "INSERT INTO auth(username, password, firstName, lastName, email, phone) 
	VALUES ('$username', '$password', '$firstName', '$lastName', '$email', '$phone')"; 

	if(!mysqli_query($con, $query)) {
		echo "Error " .mysqli_error($con);
	}
	else {
		header("Location: registered.php");
	}


?>
