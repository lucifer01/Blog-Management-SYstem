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
			<li><a class="active" href="http://localhost/blog/blogger/t_addpost.php">Add Post</a></li>
			<li><a href="http://localhost/blog/blogger/t_viewpost.php">View Post</a></li>
			<li><a href="http://localhost/blog/logout.php">logout</a></li>
		</ul>
	</div>
	<div id="content">
		<form id="addpost_form" method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
			<label>Title:</label> <input type="text" name="title"><br><br><br><br>
            <label>category:</label> <input type="text" name="category"><br><br><br><br>
           <label> Body:</label><br> <textarea name="body" rows="35" cols="150"></textarea><br><br><br>
		  
         
	     <button name="submit"><label>Post</label></button>
	        	
		</form>
	
	</div>

</div>
</body>


</html>
<?php
session_start();
include 'C:/xampp/htdocs/blog/connection.php';
$db = new db();//connection created


//post
if(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$body  = $_POST['body'];
	$category=$_POST['category'];
	$user_email = $_SESSION['user_email'];
	//$imagename=$_FILES["myimage"]["name"]; 

	 if(strlen($title)<1  ){
		 echo "<script>alert('Title should not be blank')</script>";
		 exit();}
	if(strlen($body)<10  ){
		 echo "<script>alert('Post is to short!')</script>";
		 exit();}
	//qerry to insert user content in db
	$query = "Insert INTO posts(user_id,title,body,posted,category) VALUES('$user_email','$title','$body',NOW(),'$category')";
    $db->insert($query);
	 
	
}


$db->link->close();//closing db connection

?>