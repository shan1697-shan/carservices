<?php

$city=$_GET["city"];
$brand=$_GET["brand"];
$model=$_GET["model"];



?>
<!DOCTYPE html>
<html>
<head>
	<title>services</title>
	<link rel="stylesheet" type="text/css" href="services.css">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
  <script type="text/javascript" src="js1/jquery.min.js"></script>
  <script type="text/javascript" src="js1/bootstrap.min.js"></script>
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
	.box4{
	align-content: center;
}
	.box3{
	background-color: black;
	color: white;
	text-align: center;

}
		#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  box-shadow: 1px 1px grey;
}

#myImg:hover {opacity: 0.7;}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px; 
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.9);
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}


@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
.box1{
	margin: 8px 0px;
}
	</style>
</head>
<body>

	<div class="container-fluid"  style="background-image: url(images1/car.png);height: 447px;">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-inverse" style="width: 102.3%; margin:0px -15px;">
  					<div class="container-fluid">
    				<div class="navbar-header">
      				<a href="index.php" class="navbar-brand" style="font-size: 25px;"><span style="color: red;">C</span>ar <span style="color: red;">S</span>ervices</a>
    				</div>
    				<ul class="nav navbar-nav navbar-right">
      					<li><a href="index.php">Home</a></li>
      					<li><a href="brand.php">Change Car</a></li>
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
		
	<div class="row" style="margin: 15px 0px;">
		<div class="col-sm-12">
	<div class="col-sm-4">
<a href="order2.php?ser=servicing&brand=<?php echo $brand ?>&city=<?php echo $city ?>&model=<?php echo $model ?>"><img id="myImg" src="images1/serv1.png" alt="Servicing" style="width:100%;max-width:300px"></a>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
</div>
<div class="col-sm-4">
  <a href="order1.php?ser=Repairing&brand=<?php echo $brand ?>&city=<?php echo $city ?>&model=<?php echo $model ?>"><img id="myImg" src="images1/serv2.png" alt="Repairing" style="width:100%;max-width:300px"></a>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
  	</div>
  	</div>
  	<div class="col-sm-4">
 <a href="order.php?ser=Painting&brand=<?php echo $brand ?>&city=<?php echo $city ?>&model=<?php echo $model ?>"><img id="myImg" src="images1/serv3.png" alt="Denting/Painting" style="width:100%;max-width:300px;"></a>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
  	</div>
  	</div>
  </div>
  	<div class="col-sm-12 box1">
  	<div class="col-sm-2"></div>
  	<div class="col-sm-4">
 <a href="order3.php?ser=car care&brand=<?php echo $brand ?>&city=<?php echo $city ?>&model=<?php echo $model ?>"> <img id="myImg" src="images1/serv4.png" alt="aaaaa" style="width:100%;max-width:300px;"></a>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
  	</div>
  	</div>
  	<div class="col-sm-4">
 <a href="order4.php?ser=emergency&brand=<?php echo $brand ?>&city=<?php echo $city ?>&model=<?php echo $model ?>"><img id="myImg" src="images1/serv5.png" alt="Car Care" style="width:100%;max-width:300px;"></a>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
  	</div>
  	</div>
  	<div class="col-sm-2"></div>
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
				<p>&copy 2019 Car Services. All Rights Reserved | Design by Akash Sinha</p>
		</div>
		
	</div>
</div>
	
</body>
</html>