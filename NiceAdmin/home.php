<?php

session_start();
if($_SESSION['username']==true)
{
//echo "sorry again";
}
else{
	header("location:loginform.php");
}
echo "This is home page";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

<div style="float: left;">
<p style="color: green">Welcome My Dear &nbsp;&nbsp;<?php echo $_SESSION['username']; ?></p>
</div>
<div style="float: right;">
<p style="color: red"><a href="logout.php">Logout</a></p>
</div>
</body>
</html>