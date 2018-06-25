


<html>
<head>
<title>Blogger_Home</title>

 <!--Link to css-->
	<link rel="stylesheet" type="text/css" href="/blog/css/blogger.css">
<body>



<div class="container">
	<div id="menu">
		<ul>
			<li><a  class="active" href="http://localhost/blog/blogger/t_home.php">Home</a></li>
			<li><a  href="http://localhost/blog/blogger/t_addpost.php">Add Post</a></li>
			<li><a  href="http://localhost/blog/blogger/t_viewpost.php">View Post</a></li>
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
	
	
	$query = "SELECT * FROM users ";
	$result = $db->link->query($query);
			    
		
		 while($row = $result->fetch_assoc() ){
			 if($user_email == $row['user_email']){
				   echo  "<div class='userstatus'>"."<h2>User email_ID: ". $row['user_email']."</h2>".
		           
				   
				   "<h3>Name: ".$row['user_name']."</h3>".
				   "<h3>Age: ".$row['user_name']."</h3>".
				   "<h3>Status: ".$row['status']."</h3>".
				   "<p>User since:"  .$row['user_reg_date']."</p>".
				   "</div>";
			    }
			}
		
		
	




$db->link->close();//closing db connection
?>
</body>

</head>
</html>
