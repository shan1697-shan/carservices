<?php
 include 'conn.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;

background-image:url(images/bg4.jpg);}

/* Full-width input fields */
input[type=text], input[type=password] ,select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


/* Set a style for all buttons */
button {
  background-color:grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn{
background-color:#f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {

  background-color: lightgray;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%;
  font-family: Serif;
  opacity: 0.8;
   /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  font-family: Serif;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body onload="document.getElementById('id01').style.display='block'" style="width:auto;">



<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="city.php">

    
        <h2 align="center">Select car</h2>
    <div class="container">
      <label for="uname"><b>Brand</b></label>
      
         <select onchange="myfun(this.value)" name="brand">
  <option >select any one</option>
  <?php

  $q='select * from brand';
  $result=mysqli_query($conn,$q);
 while ($rows=mysqli_fetch_array($result)) { ?>
  
  <option value=<?php echo $rows['slno'] ?>><?php echo $rows['model'] ?></option>


 <?php  
 }
?>
</select>




            <label for="psw"><b>Model</b></label>
      <select id="dataget" name="model"><br>

<option>select any one</option>



  


</select>
        
      <button type="submit">next</button>
      <a href="index.php" style="text-decoration: none;color: white"> <button class="cancelbtn" align="center" type="button" > Cancel</button></a>
    </div>

   
  </form>
</div>

 <script type="text/javascript">
  
function myfun(datavalue){

$.ajax({

  url: 'class.php',
  type: 'POST',
  data: { datapost:datavalue },
  success: function(result){

$('#dataget').html(result); 

}
});
}

 </script>


</body>
</html>
