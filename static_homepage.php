<?php 
	  
	require("sql/database.php");	
  
?>


<?php
	
	session_start();
	
	
	if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true){
		
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
  <?php  
	  
	  include ('actions/nav_bar.php'); 
	  
  ?>
  	<div>
        
        <h1 align="center">Computer Science Club</h1>
        <h2 align="center" class="docs-header">Welcome to the Computer Science club website for MAC!</h2>
		
		<?php
        	$sql = "SELECT POSTID, postTitle, postDate, postAuthor, postBody FROM postdata ORDER BY postDate DESC";
	
			$result = mysqli_query($conn, $sql);
			
				$postNum = 0;
	
				if (mysqli_num_rows($result) > 0){
		
					while ($row = mysqli_fetch_assoc($result)){
						
					$postNum += 1; //increment postNum so you can see what post # the post is
					
					$title = $row["postTitle"];
					$timestamp = $row["postDate"];
					$author = $row["postAuthor"];
					$body = $row["postBody"];
					
					$postid = 'post-'.$postNum;
					
					
					echo "
						<div id = $postid class = 'post'>
							<h6 id = 'timestamp' align='right'>$timestamp</h6>
							<h1 id = 'title'>$title</h1>
							<h5 id = 'author'>by $author</h5> 
							<p id = 'postbody'>$body</p>
							<br>$postid</br>
						</div>
					   ";
			
					}
				}
				else{
					echo "<h5 align = 'center'>No posts</h5>";
				}

			$conn->close();
		?>
    </div>
  
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>
