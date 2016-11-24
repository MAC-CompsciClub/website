<?php
	
	session_start();
	
	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
	{
		header("Location: admin_page.php", true, 301);
		die();
		
	}
	
	if (empty($_POST["username"]) && empty($_POST["password"])){
		
	} //check if they just loaded page, POST will throw an error since it has no value
	
	else{
		$username = $_POST["username"];
		$password = $_POST["password"];
	
		if ($username == "admin" && $password == "password"){
			
			$_SESSION['isAdmin'] = true; //make them an admin
			
			header("Location: admin_page.php", true, 301);
			die();
		}
		else{
			echo"Incorrect password";
			$_SESSION['isAdmin'] = false;
			session_destroy();
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
		  <?php 
	  
			  include 'nav_bar.php';
  
  			?>
		<div align="center">
		<h2 >Administrator Login</h2>
		 <form action="admin_login.php" method="POST">
			 <p>
			  <input type="text" name="username" placeholder="Enter username">
			 </p>
			 
			 <p>
			 
			  <input type="password" name="password" placeholder="Enter password">
			 </p>

	  		<input type="submit" value="LOGIN" />
	  	</form>
		</div>
	</body>
	
</html>
