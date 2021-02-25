<!DOCTYPE html>
<html>
<head>

	<title>search</title>
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
  </style>
</head>
<body>
  <?php

$search=$_POST["search"];

 
  ?>
<div class="container-fluid">
	<div class="row">
		<nav class="navbar navbar-inverse" style="width: 100%;">
  					<div class="container-fluid">
    				<div class="navbar-header">
      				<a href="" class="navbar-brand" style="font-size: 25px;"><span style="color: red;">C</span>ar <span style="color: red;">S</span>ervices</a>
    				</div>
            <form method="post">
    				<input type="text" name="search" value="<?php echo $search; ?>" placeholder="Search..." style="width: 65%; margin: 10px 0px; height: 31px; " disabled>
    				

    				<ul class="nav navbar-nav navbar-right">
      					<li><a href="index.php">Home</a></li>
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
			     </form>
		</nav>
	</div>
  <div class="row">
    <div class="col-sm-12" style="height: 375px; background-image: url(images/a.jpg);">
      <?php

       include 'conn.php';



if($search==services)
{

  ?><a href="brand.php"><img src="images1/serv1.png" style="margin: 22px 34%;"></a><?php
}
else if($search==painting)
{

  ?><a href="brand.php"><img src="images1/serv3.png" style="margin: 22px 34%;"></a><?php
}

else if($search==reparing)
{

  ?><a href="brand.php"><img src="images1/serv2.png" style="margin: 22px 34%;"></a><?php
}


else if($search==carcare)
{

  ?><a href="brand.php"><img src="images1/serv4.png" style="margin: 22px 34%;"></a><?php
}


else if($search==emergency)
{

  ?><a href="brand.php"><img src="images1/serv5.png" style="margin: 22px 34%;"></a><?php
}
else
{
  ?><p align="center" style="font-size: 40px; margin:10px 0px;">no result found</p><?php
}
 
 ?>



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