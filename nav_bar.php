<!DOCTYPE html>

<?php

?>

<html>
	<head>
		
		 <link rel="stylesheet" href="/site/css/custom.css"/> <!--Path must be absolute!-->
		   <link rel="stylesheet" href="css/normalize.css">
		   <link rel="stylesheet" href="css/skeleton.css">
		   <link rel="stylesheet" href="css/font.css">
		 
	</head>
	
	
	<nav>
		<ul class = "navbar">
		<li><a href = "static_homepage.php">Home</a></li>
		<li><a href = "static_homepage.php">Resources</a></li>
				
			<?php if (!isset($_SESSION['isAdmin']))
				{
					echo "<li><a href = 'admin_login.php'>Admin Login</a></li>"; //Only make this button 									visible if the user is an admin
				}
			?>
				
				
			<?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
				{
					echo "<li><a href = 'admin_page.php'>Admin Page</a></li>"; //Only make this button 															visible if the user is an admin
				}
				?>
		</ul>
	</nav>
			
			
	
</html>