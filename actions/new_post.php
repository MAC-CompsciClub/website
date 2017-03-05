<?php
	
	require ("../sql/database.php"); //conncet to db
		
	$title = $_POST["ptitle"];
	$author = $_POST["pauthor"];
	$body = $_POST["pbody"];
	
	$title = htmlspecialchars($title, ENT_QUOTES);
	$author = htmlspecialchars($author, ENT_QUOTES);
	$body = htmlspecialchars($body, ENT_QUOTES);
	//$title = mysqli_real_escape_string($title);
	//$author = mysqli_real_escape_string($author);
	//$body = mysqli_real_escape_string($body);
	
	$sql = "INSERT INTO postdata (POSTID, postTitle, postDate, postAuthor, postBody) VALUES
            (NULL, '$title', CURRENT_TIMESTAMP, '$author', '$body');";
		if(mysqli_query($conn, $sql))
		{
			echo "Records added successfully.";
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	
	
	$conn->close();
	
	header("Location: ../admin/admin_page.php");
	die();
		
	
?>
