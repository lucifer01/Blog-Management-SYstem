<?php
include 'C:\xampp\htdocs\blog\templates\t_blogger.php';

//include 'C:\xampp\htdocs\blog\connection.php';
//$db = new db();//connection created
//logout


//post
if(isset($_POST['submit']))
{
	//$title = $_POST['title'];
	//$body  = $_POST['body'];
	//$user_id = $_SESSION['user_id']
	
	 //qerry to insert user content in db
	// $rquery = "Insert INTO posts(user_id,title,body,posted) VALUES('$title','$body',NOW())";
    // $db->insert($result);
	 
	echo "<script>alert('successfull')</script>" ;
}


//$db->link->close();//closing db connection

?>