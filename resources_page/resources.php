<!DOCTYPE html>

<html lang="en">

<head>

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/font.css">

<!-- Favicon
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="icon" type="image/png" href="images/favicon.png">
 <script src="../js/resourcepage_tabs.js"></script>

</head>


<body class = "resourcespage">
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->	
<?php  
  
  include ('../actions/nav_bar.php'); 
  
?>
	<div id = "resourcespanel">
		<ul class="resourcestabs">
        <li><a href="javascript:void(0)" class="tablinks" onclick="tab(event,'java')">Java</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="tab(event,'python')">Python</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="tab(event,'ccc')">Canadian Computing Competition</a></li>
        
     	</ul>

    </div>
    
     <div id = "java" class = "tabcontent2">
	     <h1 align="center">Java Tutorial</h1>
	     <p>
		     I will show you how to become the #1 java programmer!
	     </p>
	   
	</div>
	
	<div id = "python" class = "tabcontent2">
	     <h1 align="center">Python Tutorial</h1>
	     <p>
		     I will show you how to become the #1 python programmer!
	     </p>
	   
	</div>

	<div id = "ccc" class = "tabcontent2">
	     <h1 align="center">CCC Tutorial</h1>
	     <p>
		     I will show you how to register to the CCC
	     </p>
	   
	</div>
   
	
	

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>