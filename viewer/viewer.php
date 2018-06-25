


<html>
<head>
<title>Blog</title>

 <!--Link to css-->
	<link rel="stylesheet" type="text/css" href="/blog/css/blogger.css">
</head>



<body>
<div class="container">
	<div id="menu">
		<ul>
			<li><a  class="active"  href="http://localhost/blog/viewer/viewer.php">Home</a></li>
			 <li><a  href="http://localhost/blog/viewer/contact.php">Contact Admin</a></li>
			    
			
		</ul>
	</div>
	

<?php

include 'C:/xampp/htdocs/blog/connection.php';
$db = new db();//connection created

$query = "SELECT * FROM posts ";
$result = $db->link->query($query);
			    
		if($result->num_rows >0){
		 while($row = $result->fetch_assoc() ){
				  
				   echo "<div class='cont'>".
				   "<form   method='post' action='../userinfo.php' >".
				  "<input type='hidden' value = ".$row['user_id']." name = 'hidden' >".
				   
				   "<h2>Posted by: " ."<button  name='submit'>" .$row['user_id']. "</button>". "</h2>".
				   "</form>".
				   "<h1>".$row['title']."</h1>".
				   "<h2>Category: ". $row['category']."</h2>".
		           "<h4>".$row['body']."</h4>".
				   "<p>Posted on: "  .$row['posted']."</p>".
				   "</div>";
			    
			}
		}
		
		
		
$db->link->close();//closing db connection
?>

</body>
</html>
