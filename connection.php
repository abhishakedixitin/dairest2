<?php

 $host = "dairest.c0b6cqwyagui.us-east-2.rds.amazonaws.com"; 
$user = "root"; 
$pass = "abcd1234"; 
$db = "ecom"; 
$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn,$db);
?>

