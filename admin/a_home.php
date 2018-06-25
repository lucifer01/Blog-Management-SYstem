

<html>
<head>
<title>Admin_Home</title>

 <!--Link to css-->
	<link rel="stylesheet" type="text/css" href="/blog/css/blogger.css">
</head>


<body>

<div class="container">
	<div id="menu">
		<ul>
			<li><a  class="active" href="http://localhost/blog/admin/a_home.php">Home</a></li>
			<li><a  href="http://localhost/blog/admin/delete.php">Delete Post</a></li>
			<li><a  href="http://localhost/blog/logout.php">logout</a></li>
		</ul>
	</div>
	<h1>List Of Users:</h1>

<?php
session_start();
include 'C:/xampp/htdocs/blog/connection.php';
$db = new db();//connection created


$query="select * from users where user_email not like 'admin@gmail.com' ";
$result = $db->link->query($query);

if($result->num_rows >0){
		 while($row = $result->fetch_assoc() ){
				 echo  "<div class='userstatus'>".
				   "<form   method='post' action='../userinfo.php' >".
				  
				   "<input type='hidden' value = ".$row['user_email']." name = 'hidden' >".
				   
				   "<h2>User_email : " ."<button  name='submit'>" .$row['user_email']. "</button>". "</h2>".
				   "</form>".
				 
		           "<h2>Status: "."<form method= 'post' action = 'a_home.php'>".
				   "<button name='submit'>".$row['status']."</button>".
				   "</h2>".
				   "<input type='hidden' value= ".$row['user_email']." name = 'hidden'>".
				   "</form>".
				   "<p>Registration Date:"  .$row['user_reg_date']."</p>".
				   "</div>";
                   		   
				   }
}	   

if(isset($_POST['submit'])){
	
	    $user = $_POST['hidden'];
	
	
	
		$query = "select status from users where user_email like '$user' ";
		$result = $db->link->query($query);
		$row = $result->fetch_assoc();
		if($row['status'] == 'unverified')
		{ 
		$status = "update users set status = 'verified' where user_email like'$user' ";
		$db->link->query($status);
		echo "<script>alert('Sucessfull')</script>";
		header("Refresh: 1 ;url='http://localhost/blog/admin/a_home.php'");
		
			
		}
		else{
			
			$status = "update users set status = 'unverified' where user_email like '$user' ";
		    $db->link->query($status);
			header("Refresh: 1 ;url='http://localhost/blog/admin/a_home.php'");
			
			echo "<script>alert('Sucessfull')</script>";
		
		
	}
}

$db->link->close();//closing db connection
?>

</body>
</html>
