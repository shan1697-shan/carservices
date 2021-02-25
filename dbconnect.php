<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 0);
$host="localhost";
$user="shan";
$pass="Sky123@456789";
$db="id11649286_fashionpoint";
$con = mysqli_connect($host,$user,$pass,$db);
if(!$con)
{
	echo "Database not connected";
}
?>