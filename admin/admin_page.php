
<?php

session_start();

if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true)
{
    
}
else
{            
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
            <?php include ('../sql/database.php'); 
                  include ('../actions/access_posts.php');
            ?>
         
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
	        
        if (count($posts) > 0)
        {   
            for ($i = 0; $i < count($posts); $i++)
            {
                $postid = 'post-'.$i;
                
                $title = $posts[$i][0];
                $timestamp = $posts[$i][1];
                $author = $posts[$i][2];
                $body = $posts[$i][3];
                $uniqueID = $posts[$i][4];
                
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
                
        
        else
        {
        	echo "<h5 align = 'center'>No posts</h5>";
        }
                
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