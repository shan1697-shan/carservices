<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;

background-image:url(images/bg4.jpg);
opacity: 0.8;}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=date], select {
  width: 100%;
  padding: 8px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


/* Set a style for all buttons */
button {
  background-color:#47e07d;
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
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
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
  padding: 4px  ;
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
 background-image: url("a1.jpg");
  background-color: lightgray;
  margin: 0% auto 45% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%;
  font-family: Serif;
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
  
  <form class="modal-content animate" action="#" method="post">

    
        <h2 align="center">Sign Up </h2>
    <div class="container">
      <label for="uname"><b>name</b></label>
      <input type="text" name="name" placeholder="name" required="">
       <label for="uname"><b>email</b></label>
      <input type="text" name="email" placeholder="email" required="">
         <label for="uname"><b>dob</b></label>
      <input type="date" name="dob"  required="">
       <label for="uname"><b>number</b></label>
      <input type="text" name="number" placeholder="number" required="">

            <label for="psw"><b>password</b></label>
        <input type="password" name="password" placeholder="password" required="">
        
     

      <a href="index.html" style="text-decoration: none;color: white"> <button  align="center" type="submit" name="submit" class="cancelbtn"> Sign up</button></a>

      <a href="index.php" style="text-decoration: none;color: white;float: right;"> <button  align="center" type="button" class="cancelbtn"> cancel</button></a>
    
    </div>

   
  </form>
</div>


 <?php
 include 'conn.php';
 if(isset($_POST['submit']))
 {


$name=$_POST["name"]; 
$email=$_POST["email"];
$number=$_POST["number"];
$dob=$_POST["dob"];

$password=$_POST["password"];



$sqll="insert into users (name,email,number,dob,password) values ('$name','$email','$number','$dob','$password')";
mysqli_query($conn,$sqll);
echo"<script>";
echo"alert('signed up sucessfully ');location.href='log.php';";
echo"</script>";




 }
?>


</body>
</html>
