<?php
include "dbcon.php";
$n= $_POST['name'];
$e = $_POST['email'];
$p = $_POST['phone'];
$pa = $_POST['password'];

// echo $n,$e,$p,$pa;
echo $data = "insert into employee(name,email,phone,password)value('$n','$e','$p','$pa')";
mysqli_query($con,$data);




?>