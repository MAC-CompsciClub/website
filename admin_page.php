<?php
	
	session_start();

	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
	{
		echo "you're an admin";
	}
	else{
				
		header("Location: static_homepage.php", true, 301);
		die();
	}
?>

<!DOCTYPE html>

<html lang = "en">
	
	<head>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/font.css">
		<title>Welcome to the admin page</title>
	</head>
	
	<body>
		  <?php 
	  
			  include 'nav_bar.php';
  
  		?>


 <div class="container">
    <section class="header">
      <h1 class="title"> Admin Page </h1>
    </section>
    
	<div class="docs-section">
   	  <h2 align="center">Welcome to the Administrator Page!</h2>

		<div align="center">
			<form action="admin_logout.php">
	  		<input type="submit" value="Logout" />
			</form>
   		</div>

 	</div>
	
</body>

</html>
