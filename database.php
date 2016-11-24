<?php

$servername = "localhost";
$username = "localhost";
$password = "4ddbcTSRXWDHQjpS";

$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error){
		die ("Connection failed: " . $conn->connect_error);
		
	}
	echo "<p>Connected successfully</p>";

?>
