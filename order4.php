<?php
$ser=$_GET["ser"];
$city=$_GET["city"];
$brand=$_GET["brand"];
$model=$_GET["model"];

include 'conn.php';


$querry="select * from brand where slno='$brand'";
$data=mysqli_query($conn,$querry);
$total=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
	<script type="text/javascript" src="js1/jquery.min.js"></script>
	<script type="text/javascript" src="js1/bootstrap.min.js"></script>
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	 <style type="text/css">
	 	.b1{	background-image: url(images1/back.jpg); 
	 		 		opacity: 0.9;
	 		 		background-repeat: no-repeat;
	 		 		background-size: 100% 100%;
	 	}
	 	.box4{
	align-content: center;
}
	.box3{
	background-color: black;
	color: white;
	text-align: center;

}
.b2{
	box-shadow: 1px 1px 1px 1px grey;
	border:1px solid black;
	color: black;
	background-color: lightgrey;
	opacity: 0.8;
}
li{
	color: white;
	font-size: 13px;
}
	 </style>
</head>
<body>
<div class="container-fluid b1">
	<div class="row">
		<div class="col-sm-12">
			<nav class="navbar navbar-inverse" style="width: 102.3%; margin:0px -15px;">
  					<div class="container-fluid">
    				<div class="navbar-header">
      				<a href="" class="navbar-brand" style="font-size: 25px;"><span style="color: red;">C</span>ar <span style="color: red;">S</span>ervices</a>
    				</div>
    				<ul class="nav navbar-nav navbar-right">
      					<li><a href="index.php">Home</a></li>
      					<li class="active"><a href="#">Order</a></li>
      					<li><li>
                    <?php
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
?>


                  </li></li>
    				</ul>
  					</div>
				</nav>
			
		</div>
		
	</div>
	<div class="row" style="margin: 20px 0px;">
		<div class="col-sm-12">
			<div class="col-sm-1">
				
			</div>
			<div class="col-sm-3" style=" margin: 0px 2px;">
				<img src="images1/b1.jpg" style="width: 110%;height: 229px;margin: 0px -15px;">
				<h2 style="color: white;">Emergency</h2>
				<ul>	
					<li>Towing (upto 20 kms/ Forklift)</li>
    				<li>Lowest prices</li>
    				<li>Emergency Fuel (5 Litres)</li>

				</ul>
			</div>
			<div class="col-sm-4" style=" margin: 0px 2px;">
				<h2 style="color: white;">Emergency Includes</h2>
				<ol>
					<li>Flat Tyre</li>
					<li>Key Lockout</li>
					<li>Minor Repairs</li>
					<li>Battery Jump Start</li>
					<li>Removes dullness</li>
				</ol>

			</div>
			<div class="col-sm-3 b2">
				<h3 style="margin: 0px 75px;">Your Order</h3>
				<h5>brand:&nbsp&nbsp<?php echo $total['model']; ?></h5> model:&nbsp&nbsp<?php echo $model ?>
				
				<h5>CC Price: &nbsp&nbsp&nbsp₹2000.00</h5>
				<p>(incl. of tax)</p>
				<a href="finalorder.php?ser=<?php echo $ser ?>&brand=<?php echo $brand ?>&city=<?php echo $city ?>&model=<?php echo $model ?>"><button type="button" class="btn btn-success" style="width: 90%;margin: 0px 15px;">Order</button></a>

			</div>
			<div class="col-sm-1">
				
			</div>
		</div>
		
	</div>
</div>
<div class="container-fluid">
	<div class="row">
 		<div class="col-sm-12 box3">
		<h2><span style="color: red;">C</span>ar <span style="color: red;">S</span>ervices</h2>
				<div class="box4">
				<a href="#"><i class="fa fa-facebook-square fa-2x" id="a1" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus-square fa-2x" id="a1" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-2x" id="a1" aria-hidden="true"></i></a>
				</div>
				<p>&copy 2019 Car Services. All Rights Reserved | Design by Shantanu</p>
		</div>
		
	</div>
</div>
</body>
</html>