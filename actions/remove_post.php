<?php
	require('../sql/database.php');
	
	if(isset($_GET["postid"])){
		$postid = $_GET["postid"];
		
		$sql = "DELETE from postdata WHERE POSTID='$postid'";
		$result = mysqli_query($conn, $sql);
		
		
	}
	else{
		header("Location: ../admin/admin_page.php");
		die();
	}
	
	$conn->close();
	header("Location: ../admin/admin_page.php");
	die();
?>