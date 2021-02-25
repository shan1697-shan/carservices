<!DOCTYPE html>
<html>
<head>
	<title>login form and registration form</title>
	<style type="text/css">
		body{
		background-color: skyblue;
		background- size:cover;
	}
	
	

	
   .aa{
   	width: 30%;
   	height:auto:100%;
   	border:5px solid 0000;
    color: white;
   	background-color:gray;
   	margin-left: 30%;
    margin-top: 5%;
   padding-top: 2%;
   padding-left: 3%;
   border-radius: 20%;
  -webkit-border-radius:10%;
  
   }
   .aa input[type="text"]{
   	width: 80%;
   	height: 40px;
   	border:0;
   	border-radius: 5px;
   	-webkit-border-radius:5px;
   	-0-border-radius:5px;
   	-moz-border-radius:5px;
   }
    .aa input[type="email"]{
   	width:80%;
   	height: 40px;
   	border:0;
   	border-radius: 5px;
   	-webkit-border-radius:5px;
   	-0-border-radius:5px;
   	-moz-border-radius:5px;
   	
   }
     .aa input[type="password"]{
   	width: 80%;
   	height: 40px;
   	border:0;
   	border-radius: 5px;
   	-webkit-border-radius:5px;
   	-0-border-radius:5px;
   	-moz-border-radius:5px;
   	
   }
     .aa input[type="repassword"]{
   	width: 80%;
   	height: 40px;
   	border:0;
   	border-radius: 5px;
   	-webkit-border-radius:5px;
   	-0-border-radius:5px;
   	-moz-border-radius:5px;
   	
   }
   	
   
   

   .aa input[type="submit"]{
   	width: 50%;
   	height: 40px;
   	border:0;
   	border-radius: 10px;
   	background-color: red;
      margin-left: 20%;
    



	</style>
</head>
<body>
<div class="aa">
<h1 style="color: red;"> fill-up the registration form</h1>
<form method="POST" action="registration.php">


<label>USERNAME:-</label>
	<input type="text" name="username" placeholder="please inter username-----"><br><br>

	<label>EMAIL-ID:- &nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="email" placeholder="please inter email------"><br><br>

	<label>PASSWORD:-</label>
	<input type="password" name="password" placeholder="please inter password-----"><br><br>
	
     <label>RE-PASSWORD:-</label>
	<input type="password" name="repassword" placeholder="please inter repassword-----"><br><br>
	
	<input type="submit" value="submit">  
     

	</form>
</div>

</body>
</html>
<?php
error_reporting(E_ALL);
ini_set("display_errors","0");
$con=mysqli_connect("localhost","root","","car");

$username=$_POST['username'];

$email=$_POST['email'];
$password=$_POST['password']; 
$repassword=$_POST['repassword'];

if($username=='' || $password=='')

{
	echo "fillup the login form";
}

else{
	$sql="insert into admin set username='".$username."',password='".$password."',email='".$email."',repassword='".$repassword."'";
	$query=mysqli_query($con,$sql);
if($query)
{
echo "<script>alert('registration successful');location.href='loginform.php';</script>";
}
else
{
	echo "<script>alert('sorry login unsuccessful');location.href='registration.php';</script> ";
}
}
?>