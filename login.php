<?php
$host="localhost";
$user="root";
$password="";
$db="ojtdb"; 

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $username=$_POST["username"];	
 $password=$_POST["password"];
 
 $sql="select * from login where username= '". $username."' AND password= '". $password."' ";
 
 $result=mysqli_query($data,$sql);
 
 $row=mysqli_fetch_array($result);
 
 if($row["usertype"]=="user")
 {
	header("location:user_form.php");
 }
 else if($row["usertype"]=="admin")
 {
	header("location:admin_form.php");
 }
 else
 {
	 echo"username or password incorrect";
 }
}
?>
<!DOCTYPE html>
<html>

<head>


<title> Login Form </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container vh-100">
		<div class="row justify-content-center h-100" >
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-secondary text-white">
					<h2>Login Form</h2>
				</div>
				<div class="card-body">
				<form action="admin.php" method="POST">
					<div class="form-group">
					<label for=""> Username</label>
					<input type="username" id="username" class="form-control" name="username" required/>
					</div>
					<div class="form-group">
					<label for=""> Password</label>
					<input type="password" id="password" class="form-control" name="password" required/>
					</div>
					<input type="submit" class="btn btn-secondary w-100" value="Login" name="">
					</br>
					</br>
					<a href="register.php" >Register</a>
					</br>			
					<a href="home.php" >Return to Home page</a>
				</form>
				</div>
				<div class="card-footer text-right">
				<small>&copy; DXC Technology </small>
				</div>
			</div>
		</div>
	</div>
</body> 
</html>