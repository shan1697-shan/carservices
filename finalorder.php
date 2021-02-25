<?php
session_start();
error_reporting(E_ALL);
                    ini_set("display_errors",0 );
                    $city=$_GET["city"];
$brand=$_GET["brand"];
$model=$_GET["model"];
$ser=$_GET["ser"];
if( $_SESSION['log']==true)
{
	
}
else{
	header('location:finalorder2.php?ser='.$ser.'&city='.$city.'&brand='.$brand.'&model='.$model   );
	
}


?>

<!DOCTYPE HTML>
<html>
<?php
include 'conn.php';
session_start();
 error_reporting(E_ALL);
                    ini_set("display_errors",0 );

$akash=$_SESSION['log'];
$q="select * from users where email='$akash'";

$data1=mysqli_query($conn,$q);
$total1=mysqli_fetch_assoc($data1);

$brand1=$total1['name'];

?>

<head>
	<title> Order Form </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=" Order Form "/>
	
	
	<link href="css5/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="css5/jquery-ui.css" />
	<link href="css5/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css5/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
</head>

<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome </a>
    </div>
    <ul class="nav navbar-nav">
      
      
     <li class="active"><a href="#">order</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><?php
                    session_start();
                     error_reporting(E_ALL);
                    ini_set("display_errors",0 );

if( $_SESSION['log']==true)
{
  ?><a href="logout.php">Log out</a><?php
}
else{
 ?><a href="log.php">Login/Signup</a><?php
}
?></li>
    </ul>
  </div>
</nav>
	
	<h1>   Order Form </h1>
	<div class="bg-agile"> 
	<div class="book-appointment">
			
			<div class="book-agileinfo-form">
				<form action="#" method="post">
					
					<h2 class="sub-head-w3ls">  Order Form</h2>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="name" value=" <?php
                    
                     error_reporting(E_ALL);
                    ini_set("display_errors",0 );

if( $_SESSION['log']==true)
{ echo $total1['name'];
  
}
else{
 
}
?>" placeholder="Full Name" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="number" value=" <?php
                    
                     error_reporting(E_ALL);
                    ini_set("display_errors",0 );

if( $_SESSION['log']==true)
{ echo $total1['number'];
  
}
else{
 
}
?>" placeholder="Phone number" required="">
						</div>
					</div>
					
					
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="pickupdate" placeholder="date of pickup (dd/mm/yy)" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" id="timepicker" name="pickuptime" class="timepicker form-control hasWickedpicker" placeholder="Time of pickup" value="" onkeypress="return false;">
						</div>
					</div>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<input type="text" name="pickuplocation" placeholder="pickup location" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<input type="text" name="droplocation" placeholder="drop location" required="">
						</div>
					</div>

					
					<div class="clear"></div>
					<input type="submit" name="submit" value="Submit">
					
					<div class="clear"></div>
				</form>
			</div>

		</div>
		<div  class="left-agileits-w3layouts-img">
			<h3>What we provide you</h3>
			<ul >
				<li><span>.</span>24x7 car service are available</li>
				<li><span>.</span>Minimum delivery time : 24 hours</li>

			
				<li><span>.</span>Credit and debit card payment facility
				 </li>
			</ul>
			
		</div>



		
	</div>
	
	<div >
		<br><br><p align="center" style="color:white">&copy; 2018 Order Form . All Rights Reserved | Design by shantanu		</p>
	</div>
	
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
<?php
 include 'conn.php';


$q="select * from brand where slno='$brand'";
$data1=mysqli_query($conn,$q);
$total1=mysqli_fetch_assoc($data1);

$brand1=$total1['model'];
 if(isset($_POST['submit']))
 {


$name=$_POST["name"]; 
$pickupdate=$_POST["pickupdate"];
$number=$_POST["number"];
$pickuptime=$_POST["pickuptime"];

$pickuplocation=$_POST["pickuplocation"];
$droplocation=$_POST["droplocation"];
$services=$ser;
$timedelivery=$city;

$sqll="insert into orders values ('$name','$number','$pickupdate','$pickuptime','$pickuplocation','$droplocation','$services','$timedelivery','$brand1','$model')";
mysqli_query($conn,$sqll);
echo"<script>";
echo"alert('order placed  sucessfully');location.href='index.php';    ";
echo"</script>";




 }
?>
</body>

</html>