<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'finaldb');
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)
or die("Failed to connect to server!" .mysqli_connect_error());

$username = mysqli_real_escape_string($con, $_POST['loginusername']);
$password = mysqli_real_escape_string($con, $_POST['loginpassword']);

$password = md5($password);

$sql = mysqli_query($con, "SELECT * FROM auth WHERE username ='$username' AND password ='$password'") or die("Failed to Query Database");
$row = mysqli_fetch_array($sql);

if($row['username'] == $username && $row['password'] == $password) {
	header("Location: loggedin.html");
	exit();
}
else {
	echo "Invalid Credentials.";
	exit();
}
?>
