<?php

	require('../sql/database.php');
	
	if(isset($_GET["postid"])){
		$postid = $_GET["postid"];
		
		$sql = "DELETE from postdata WHERE POSTID='$postid'";
		$result = mysqli_query($conn, $sql);
		
		
	}
	
	$conn->close();
	header("Location: ../static_homepage.php");
	die();
?>