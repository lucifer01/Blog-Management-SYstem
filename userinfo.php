


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
			<li><a  class="active"  href="http://localhost/blog/viewer/viewer.php">About</a></li>
			
		</ul>
	</div>
	

<?php

include 'C:/xampp/htdocs/blog/connection.php';
$db = new db();//connection created

$query = "SELECT * FROM users ";
$result = $db->link->query($query);
			    
	
		if (isset($_POST['submit'])){
			
		$id=$_POST['hidden'];
	
		$query2 = "SELECT * FROM users where user_email like '$id'  ";
		$result2 = $db->link->query($query2);
			    
		
		 while($row = $result2->fetch_assoc() ){
			 
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
</html>
