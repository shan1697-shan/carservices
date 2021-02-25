<!DOCTYPE html>
<html>
<head>
	<title> id is self learn</title>





</head>
<body>


<form method="post" action="id.php" enctype="multipart/form-data">

<label>username :</label> 
<input type="text" name="username">
<br>
<br>
<label>password :</label>
<input type="password" name="password ">
<br>
<br>
<label>email :</label>
<input type="text" name="email">
<br>
<br>


<input type="submit" name="save" value="save" style="background-color: red; margin-left:5%; width: 10%; ">
</form>





</body>
</html>
<?
error_reporting(E_ALL);
ini_set("display_errors","0");



$username=$_POST['username'];
$password=$_POST['password'];

$email=$_POST['email'];


echo $username;  
echo "</br>";
echo $password;
echo "</br>";
echo $email;

$bipin=mysqli_connect("localhost","root","","mithl")or die('Error in handling');

if($username == ''  )
{
	echo "Please fill all fields";

}
else
{
$sql="insert into mkuser set username='".$username."',password ='".$password."',email='".$email."'";

$a=mysqli_query($bipin,$sql);
if($a)
{
	//echo "<script>alert('Data form submitted');location.href='id.php'</script>";
} 
else
{
	//echo "<script>alert('Data form not submitted' );location.href='id.php' </script>"; 
}
}





?>