

<html>
<head>
<title>Admin_Delete_Post</title>

 <!--Link to css-->
	<link rel="stylesheet" type="text/css" href="/blog/css/blogger.css">
</head>



<body>
<div class="container">
	<div id="menu">
		<ul>
			<li><a   href="http://localhost/blog/admin/a_home.php">Home</a></li>
			<li><a   class="active" href="http://localhost/blog/admin/delete.php">Delete Post</a></li>
			<li><a   href="http://localhost/blog/logout.php">logout</a></li>
		</ul>
	</div>
	

<?php
session_start();
include 'C:/xampp/htdocs/blog/connection.php';
$db = new db();//connection created

$query = "SELECT * FROM posts ";
$result = $db->link->query($query);
			    
		if($result->num_rows >0){
		 while($row = $result->fetch_assoc() ){
			
				   echo "<div class='cont'>".
				   "<h2>User email_ID: ". $row['user_id']."</h2>".
				   "<h1>".$row['title']."</h1>".
				   "<h2>Category: ". $row['category']."</h2>".
		           "<h4>".$row['body']."</h4>".
				   "<form method= 'post' action = 'delete.php'>".
                   "<button name='submit' >delete post</button>".
				   "<input type='hidden' value= ".$row['post_id']." name = 'hidden'>".
				   "</form>".
				    "<p>Posted on: "  .$row['posted']."</p>".
				   "</div>";
			    
			}
		}
if(isset($_POST['submit'])){
	
	    $user = $_POST['hidden'];
	
	
	
		$query = "delete from posts where post_id = '$user'  ";
		$result = $db->link->query($query);
		
		header("Refresh: 1 ;url='http://localhost/blog/admin/delete.php'");
			
	    echo "<script>alert('Sucessfull')</script>";
		
		
}		
		
$db->link->close();//closing db connection
?>

</body>
</html>
