
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
	<?php include '../actions/nav_bar.php'; ?>
	
	<head>
		<title>Welcome to the admin page</title>
		<link rel="icon" type="image/png" href="images/favicon.png">
		<script src="../js/adminpage_tabs.js"></script>
	</head>
	
	<body>
	
	    <div>
			
			<h1 align="center">Admin page</h1>
		
			<form align="center"action="admin_logout.php">
	  			<input type="submit" value="Logout" />
            </form>
            
        </div>
		
		
		<div id = "adminpanel">
		
		 <ul class="admintab">
		  <li><a href="javascript:void(0)" class="tablinks" onclick="tab(event,'manageposts')">Manage Posts</a></li>
		  <li><a href="javascript:void(0)" class="tablinks" onclick="tab(event,'addposts')">Add Post</a></li>
		 </ul>
		
		 	<div style = "display: block;" id = "manageposts" class = "tabcontent">
		 	 	<?php include ('../sql/database.php'); ?>
		 	 
		 	 		<table class="u-full-width">
		 	 		  <thead>
		 	 		   <tr>
		 	 			<th>Unique ID</th>
		 	 			<th>Post ID</th>
		 	 			<th>Timestamp</th>
		 	 			<th>Title</th>
		 	 			<th>Author</th>
		 	 			<th></th>
					   </tr>
					 </thead>
					 
					<tbody>
					
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
					$uniqueID = $row["POSTID"];
					
					echo "				
					  <tr>
					  	<td>$uniqueID</td>
						<td>$postid</td>
						<td>$timestamp</td>
						<td>$title</td>
						<td>$author</td>
						<td>
							<form method = 'GET' action='../actions/remove_post.php'>
								<input type = 'hidden' name = 'postid' value = $uniqueID />
								<input style='margin: 0;padding: 2px 10px;'type='submit' value='Delete' />
							</form>
						
						</td>
					  </tr>
					  
					  ";
					 }
					}
			
					else{
						echo "<h5 align = 'center'>No posts</h5>";
					}
					
					$conn->close();
			 	?>
					
				</tbody>
		 	 </table>
		 		
		 </div>
		
		 <div id = "addposts" class = "tabcontent">
			   <p>Add Posts</p>
		 </div>
		
		</div>
		
		
	</body>
	
	
</html>