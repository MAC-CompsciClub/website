<?php
	
	if (empty($_POST["username"]) && empty($POST["password"])){
		
	} //check if they just loaded page, POST will throw an error since it has no value
	
	else{
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if ($username == "admin" && $password == "password"){
		
		header("Location: admin_page.php", true, 301);
		die();
	}
	else{
		echo"Incorrect password";
	}
	}
	
	
?>

<!DOCTYPE html>

<html lang = "en">
	
	<head>
		  <link rel="stylesheet" href="css/normalize.css">
		  <link rel="stylesheet" href="css/skeleton.css">
		  <link rel="stylesheet" href="css/custom.css">
		  <link rel="stylesheet" href="css/font.css">
		<title>Admin Login</title>
	</head>
	
	<body>
		<div align="center">
		<h1 >Administrator Login</h1>
		 <form action="admin_login.php" method="POST">
			 <p>
			  <input type="text" name="username" placeholder="Enter username">
			 </p>
			 
			 <p>
			 
			  <input type="password" name="password" placeholder="Enter password">
			 </p>

	  		<input type="submit" value="Sumbit" />
	  	</form>
		</div>
	</body>
	
</html>