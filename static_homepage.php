<?php 
	  
	include ('nav_bar.php');
	require("database.php");	
  
?>


<?php
	
	
	
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
        <h2 align="center" class="docs-header">Welcome to the Computer Science club website for MAC!</h2>
		<?php
        	$sql = "SELECT POSTID, postTitle, postDate, postAuthor, postBody FROM postdata";
	
			$result = mysqli_query($conn, $sql);
	
				if (mysqli_num_rows($result) > 0){
		
					while ($row = mysqli_fetch_assoc($result)){
					
					$title = $row["postTitle"];
					$timestamp = $row["postDate"];
					$author = $row["postAuthor"];
					$body = $row["postBody"];
					
					
					echo "
						
						<div class = 'post'>
					
						<h6 id = 'timestamp' align='right'>$timestamp</h6>
						<h1 id = 'title'>$title</h1>
						<h5 id = 'author'>by $author</h5> 
						
						<p id = 'postbody'>$body</p>
						
						
					
						
						</div>
					
					
					
					";
			
					}
				}
				else{
					echo "no results";
				}
		?>
      </div>

  </div>
  
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>
