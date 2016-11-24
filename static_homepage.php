<?php 
	  
	include 'nav_bar.php';
  
?>


<?php
	
	include("database.php");
	
	session_start();
	
	
	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true){
		echo "welcome admin";
		
		$buttonText = "ADMIN PAGE";  //Variables for the button ID
		$buttonRef = "admin_page.php";
		
	}
	else{
		$buttonText = "ADMIN LOGIN";
		$buttonRef = "admin_login.php";
	}
	
?>

<!DOCTYPE html>

<html lang="en">

  <head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Mac Compsci Club</title>
  <meta name="description" content="This is the main page for the Macdonald Computer Science Club.">
  <meta name="author" content="Jack Wang + Hamza Saleem & The Compsci Club">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/font.css">
  
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  </head>

  
<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="container">
    <section class="header">
      <h2 class="title"> Computer Science Club </h2>
    </section>
      <div class="docs-section">
        <h2 class="docs-header">Welcome to the Computer Science club website for MAC!</h2>
        
        <p>This is a test of the soon-to-be homepage of the SJAM Compsci Club. I mostly ripped the CSS elements from the Skeleton main website.
          If you have the time, please go to the <a href="http://www.getskeleton.com">Skeleton documentation</a>.
        </p>

        <p>There are still many things to do, they include:
          <ul>
            <li>Have JS automatically generate this homepage, so we can have a feed of the most recent posts.</li>
            <li>Implement a navigational bar at the top. (one of those cool ones that can be both static and dynamic, like on the skeleton website.)</li>
            <li>FIX: Remove any unnecessary fat from the CSS files. I think the fonts are messed up. (probably because of something I did :> .)
            <li>Other stuff on the Gitlab readme.</li>                
          </ul>
        </p>
      </div>

  </div>
  
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>
