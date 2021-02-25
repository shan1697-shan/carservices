<!DOCTYPE html>
<html>
<head>
	<title>complet login form</title>
	<style type="text/css">
	body{
		background-color: pink;
		background- size:cover;
	}
	
	

	
   .aa{
   	width: 30%;
   	height:300px;
   	border:5px solid 0000;
   	border-color: yellow;
   	background-color:gray;
   	margin-left: 30%;
    margin-top: 2%;
   padding-top: 3%;
   padding-left: 5%;
   border-radius: 20%;
  -webkit-border-radius:10%;
  
   }
   .aa input[type="text"]{
   	width: 250px;
   	height: 40px;
   	border:0;
   	border-radius: 5px;
   	-webkit-border-radius:5px;
   	-0-border-radius:5px;
   	-moz-border-radius:5px;
   }
    .aa input[type="password"]{
   	width: 250px;
   	height: 40px;
   	border:0;
   	border-radius: 5px;
   	-webkit-border-radius:5px;
   	-0-border-radius:5px;
   	-moz-border-radius:5px;
   }

   	
   
   

   .aa input[type="submit"]{
   	width: 40%;
   	height: 35px;
   	border:0;
   	border-radius: 5px;
   	background-color: skyblue;
      margin-left: 5%;
      float: left;

   	
   }
   .aa input[type="cancel"]{
      width: 40%;
      height: 35px;
      border:0;
      border-radius: 5px;
      background-color: red;
      margin-left: 5%;
        float: left;

      
   }

		

	</style>
	
</head>
<body>

<div class="aa">
<h1 style="color:red";> **C-PANE(LOGIN) </h1> 

<form method="POST" action="loginform.php">
 
	
	<label>USERNAME:-</label>
	<input type="text" name="username" placeholder="please inter username-----"><br><br>

	<label>PASSWORD:-</label>
	<input type="password" name="password" placeholder="please inter password------"><br><br>
	<input type="submit" value="login">
   
   <input type="submit" value="cancel" style="background-color: red;">
</form>
	


</div>

</body>
</html>

<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors","0");
$con=mysqli_connect("localhost","root","","car");

$username=$_POST['username'];
$password=$_POST['password'];

if($password=='' || $password=='')

{
	echo "fillup the login form";
}

else{
	$sql="select *from admin where username='".$username."' and password='".$password."'";
	$query=mysqli_query($con,$sql);
   $num=mysqli_num_rows($query); 
if($num>0)
{
   $_SESSION['username']=$username;
echo "<script>alert('login successful');location.href='index.php';</script>";
}
else
{
	echo "<script>alert('sorry');location.href='loginform.php';</script>";
}
}
?>