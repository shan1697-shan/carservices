<?php 
session_start();
session_destroy();
echo "<script>alert('logout successful');location.href='loginform.php';</script>";


?>