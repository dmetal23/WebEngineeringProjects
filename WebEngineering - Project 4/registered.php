<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<title>Comp 484 Final -- Registered</title>
	<style>
		h1 {
			color: green;
		}
	</style>
</head>
<body>
<h1>You are now registered!!!<h1>
<h2>Here is a table of all registered users:</h2>

<?php
	function showTable() {
		define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'finaldb');
		$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)
		or die("Failed to connect to server!" .mysqli_connect_error());

		$sql = mysqli_query($con, "SELECT * FROM auth") or die("Failed to Query Database");
		
		echo "<table>"; // start a table tag in the HTML

		while($row = mysqli_fetch_array($sql)){   //Creates a loop to loop through results
		echo "<tr><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td></tr>";  //$row['index'] the index here is a field name
		}

		echo "</table>"; //Close the table in HTML

	}

	showTable();
?>
</body>
</html>