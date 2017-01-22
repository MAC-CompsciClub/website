<?php
    //MAKE SURE TO INCLUDE DATABASE.PHP ON THE FILE USED	require ('../sql/database.php');
    
	$sql = "SELECT POSTID, postTitle, postDate, postAuthor, postBody FROM postdata ORDER BY postDate DESC";
	$result = mysqli_query($conn, $sql);
			
	$postNum = 0;
		
	$posts = array();
	

	
	if (mysqli_num_rows($result) > 0)
	{
		
		while ($row = mysqli_fetch_assoc($result))
		{
						
		$postNum += 1; //increment postNum so you can see what post # the post is
					
		$title = $row["postTitle"];
		$timestamp = $row["postDate"];
	    $author = $row["postAuthor"];
		$body = $row["postBody"];
					
			 // $postid = 'post-'.$postNum;  handle this in the post creator?
		$uniqueID = $row["POSTID"];
			 
		$posts[$postNum-1] = array($title, $timestamp, $author, $body, $uniqueID);
			 					  // 0       1           2        3       4    
		 }
  	}
  			
		 $conn->close();

?>