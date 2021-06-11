<?php
include "dbcon.php";
$id = $_POST['id'];
$n= $_POST['name'];
$e = $_POST['email'];
$p = $_POST['phone'];
$pa = $_POST['password'];

// 
$data = "update employee SET name= '$n', email = '$e',phone = '$p', password = '$pa' where id = $id";
mysqli_query($con,$data);
header("location: employee_display.php");




?>