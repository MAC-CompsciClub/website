<?php 
	  
	include '../actions/nav_bar.php';
  
?>

<?php
	
	session_start();
	
	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
	{
		header("Location: admin_page.php", true, 301);
		die();
		
	}
	
	if (empty($_POST["username"]) && empty($_POST["password"])){
		
		echo "<h6 align ='center'>Please enter admin credentials</h6>";
		
	} //check if they just loaded page, POST will throw an error since it has no value
	
	else{
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		//query new database to verify credentials
		//query the database from user, admin
		if ($username == "admin" && $password == "password")
		{
			
			$_SESSION['isAdmin'] = true; //make them an admin
			
			header("Location: admin_page.php", true, 301); //after they click login, checks and redir
			die();
		}
		else{
			echo "<p style = 'color: red;' align = 'center'>Incorrect user/password</p>";
			$_SESSION['isAdmin'] = false;
			session_destroy();
		}
	}
	
?>

<!DOCTYPE html>

<html lang = "en">
	
	<head>
		  <link rel="stylesheet" href="../css/normalize.css">
		  <link rel="stylesheet" href="../css/skeleton.css">
		  <link rel="stylesheet" href="../css/custom.css">
		  <link rel="stylesheet" href="../css/font.css">
		  <link rel="icon" type="image/png" href="images/favicon.png">
		  
		  <title>Admin Login</title>
	</head>
	
	<body>
		<div align="center">
		<h1 >Administrator Login</h1>
		 <form action="admin_login.php" method="POST">
			 <p>
			  <input type="text" name="username" placeholder="Enter username" required>
			 </p>
			 
			 <p>
			 
			  <input type="password" name="password" placeholder="Enter password" required>
			 </p>

	  		<input class="button-primary" type="submit" value="LOGIN">
	  	</form>
		</div>
	</body>
	
</html>