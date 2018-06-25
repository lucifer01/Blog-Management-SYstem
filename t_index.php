<!DOCTYPE html>
<html>
<head>
	<title>Blog </title>
	<!--Link to css-->
	<link rel="stylesheet" type="text/css" href="/blog/css/index.css">
</head>
<body>
    <div id="header_wrapper">

     <a href="http://localhost/blog/viewer/viewer.php"><h2>Enter as Viewer</h2> </a>
</div>
	<div id="header_wrapper"> <!--header wrapper starts here--> 

		 
		
			<img id="blog" src="images\blog.png"/>

		

			<form id="form1" action="index.php" method="post" >

				<strong>Email :</strong>
				<input type="email" name="email" placeholder="Enter email ID" required="required" />
				<strong>Password :</strong>
				<input type="password" name="password" placeholder="Enter Password" required="required"/>
	        	<button name="login">login</button>
	        	


			</form>
       
		
	</div>	<!--header wrapper ends here-->


 <div id="content"><!--content area starts here-->
 	
 <table >
    <tr>
    <td id="content_left">
 	
 		<img id="theblog" src="images\theblog.png"/>
 	
 	</td>
 	<td id="content_right">
		
		
 		<form id="form2" action="index.php" method="post">
 			 <h2>Blogger Sign up here!</h2>
 			<table style="border-spacing:20px;">

 				<tr>
 					<td><strong>Name: </strong></td>
 					<td><input type="text" name="u_name" required="required" placeholder="Enter your Name" /></td>
 				</tr>
 				<tr>
 					<td><strong>Email ID: </strong></td>
 					<td><input type="email" name="u_email" required="required" placeholder="Enter your email address" /></td>
 				</tr>
 				<tr>
 					<td><strong>Password: </strong></td>
 					<td><input type="password" name="u_pass" required="required" placeholder="Enter your password" /></td>
 				</tr>
 				<tr>
 					<td><strong>Age: </strong></td>
 					<td><input type="number" name="u_age" required="required" placeholder="Enter your age" /></td>
 				</tr>
 				<tr >
 					<td colspan="6" align="center" >
 						<button name="sign_up">sign up</button>
 					</td>
 				</tr>

 		 </table>


 		</form>
 
 	<td>
    </tr>
 </table>	
 </div><!--content area ends here-->
 
 <div id= "footer">
   <h2>&copy;www.blog.com</h2>
</div>




</body>
</html>

