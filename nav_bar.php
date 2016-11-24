<!DOCTYPE html>

<?php

	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] != true)
	{
		
		session_destroy();
	}
	else{
		
	}
?>

<html>
	<head>
		
		 <link rel="stylesheet" href="/site/css/custom.css"/> <!--Path must be absolute!-->
		   <link rel="stylesheet" href="css/normalize.css">
		   <link rel="stylesheet" href="css/skeleton.css">
		   <link rel="stylesheet" href="css/font.css">
		 
	</head>
	
	<body class ="nav_bar">
			<ul class = "navbar">
				<li><a href = "static_homepage.php">Home</a></li>
				<li><a href = "static_homepage.php">Resources</a></li>
				
				<?php if (!isset($_SESSION['isAdmin']))
					{
						echo "<li><a href = 'admin_login.php'>Admin Login</a></li>";
						echo "<li class='leftpad' style='float:right'><a href=''>LOGIN FORM HERE</a></li>";
						//Only make this button visible if the user is an admin
						
					}
				?>

				<?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
					{
						echo "<li><a href = 'admin_page.php'>Admin Page</a></li>"; 
						echo "<li class='leftpad' style='float:right'><a href=''>HELLO ADMIN</a></li>";
						//Only make this button visible if the user is an admin
					}
				?>
			</ul>
			
			<div class = "spacer"></div>
			
	</body>
</html>
