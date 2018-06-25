


<html>
<head>
<title>Blogger_Home</title>

 <!--Link to css-->

 <link rel="stylesheet" type="text/css" href="/blog/css/blogger.css">
 </head>
<body>



<div class="container">
	<div id="menu">
		<ul>
			<li><a  href="http://localhost/blog/blogger/t_home.php">Home</a></li>
			<li><a  href="http://localhost/blog/blogger/t_addpost.php">Add Post</a></li>
			<li><a  class="active" href="http://localhost/blog/blogger/t_viewpost.php">View Post</a></li>
			<li><a  href="http://localhost/blog/logout.php">logout</a></li>
		</ul>
	</div>
	




<?php
session_start();
include 'C:/xampp/htdocs/blog/connection.php';


$db = new db();//connection created

$user_email = $_SESSION['user_email'];
	
	
	//$query->execute();
	//$query->bind_param($title,$body);
    //$result = $db->link->query($query);
	
	$query = "SELECT * FROM posts ";
	$result = $db->link->query($query);
			    
		if($result->num_rows >0){
		 while($row = $result->fetch_assoc() ){
			 if($user_email == $row['user_id']){
				   echo "<div class='cont'>"."<h1>".$row['title']."</h1>".
				   "<h3>Category: ". $row['category']."</h3>".
		           "<h4>".$row['body']."</h4>".
				   "</div>";
			    }
			}
		}
		
	$db->link->close();//closing db connection
?>

</body>
</html>