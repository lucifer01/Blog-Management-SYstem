
<?php

include 't_index.php';
include 'connection.php';
 $db = new db();
 
session_start();
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $pass=$_POST['password'];
  
   
   
   $query = "select * from users where user_email='$email' AND user_pass='$pass' AND status='verified' ";
   $result = $db->link->query($query);
	
	if($result->num_rows == 1)
	{
		
		$_SESSION['user_email']=$email;
		header('location:blogger\t_addpost.php'); 
	}
	else if($email=='admin@gmail.com' && $pass=='admin')
   {
	   
		header('location:admin\a_home.php'); 
   }   
	
	else{
		echo "<script>alert('Invalid Email ID or password')</script>";exit();
	}
   
 }
	
   
if(isset($_POST['sign_up'])){
	 
	 $name = $db->link->real_escape_string($_POST['u_name']);
	 $pass = $db->link->real_escape_string($_POST['u_pass']);
	 $email = $db->link->real_escape_string($_POST['u_email']);
	 $age  = $db->link->real_escape_string($_POST['u_age']);
	 $status = "unverified";
	 //$posts  =  "no";
	 $ver_code = mt_rand();
	 
	 //validating password
	 if(strlen($pass)<5){
		 echo "<script>alert('password should be of minimum 5 characters long')</script>";
		 exit();
	 }
	 
	 //validating email
	 $check_email = "select * from users where user_email = '$email'";
	 $result = $db->link->query($check_email);
	 
	 if($result->num_rows >0){
		 while($row = $result->fetch_assoc() ){
			 if($email == $row['user_email']){
				  echo "<script>alert('Sorry this Email already exist,try another')</script>"; exit();
			    }
			}
		}
	 //qerry to insert user content in db
	 $query= "Insert INTO users (user_name,user_pass,user_email,user_age,user_image,user_reg_date,user_last_login,ver_code,status) VALUES ('$name','$pass','$email','$age','default.jpg',NOW(),NOW(),'$ver_code','$status' )";
     $db->insert($query);
	 
	 
 }
 $db->link->close();//closing db connection
?>
