<?php
	
		$servername = "localhost";
		$username = "localhost";
		$password = "4ddbcTSRXWDHQjpS";
		$dbname = "posts";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error){
			die ("Connection failed: " . $conn->connect_error);
		
		}
		

?>
