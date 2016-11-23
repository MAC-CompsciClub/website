<?php
	
	session_start();

	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
	{
		echo "you're an admin";
		
	}
	else{
		echo "gtfo";
		
		header("Location: static_homepage.php", true, 301);
		die();
	}
?>

<!DOCTYPE html>

<html lang = "en">
	
	<head>
		<title>Welcome to the admin page</title>
	</head>
	
	<body>
		<h1>Admin page!</h1>
	<form action="admin_logout.php">
	  		<input type="submit" value="Logout" />
	  </form>
	</body>
	
</html>