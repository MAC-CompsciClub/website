
<?php
	
	session_start();

	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
	{
		
	}
	else{
				
		header("Location: static_homepage.php", true, 301);
		die();
	}
?>

<!DOCTYPE html>

<html lang = "en">
	<?php include 'nav_bar.php'; ?>
	
	<head>
		<title>Welcome to the admin page</title>
	</head>
	
	<body>
	
		<div id = "page-container">
		
			<h1 align="center">Admin page</h1>
		
			<form align="center"action="admin_logout.php">
	  			<input type="submit" value="Logout" />
	  		</form>
	  	
		</div>
	
	</body>
	
	
</html>