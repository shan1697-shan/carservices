<?php
include 'conn.php';
$nameid=$_POST['datapost'];

$q="select * from model_name where slno='".$nameid."'";

$result=mysqli_query($conn,$q);

while ($rows=mysqli_fetch_array($result)) { ?>
 	
 	<option value=<?php echo $rows['model_name'] ?>><?php echo $rows['model_name'] ?></option>


 <?php	
 }
?>


