<?php
include "dbcon.php";
 $u =$_POST['username'];
 $p =$_POST['password'];
 $e = $_POST['email'];
 $ph = $_POST['phone'];
 $d = $_POST['dob'];
 $a = $_POST['address'];
 $pi = $_POST['pincode'];

 $data = "insert into task2(username,password,email,phone,dob,address,pincode)value('$u','$p','$e','$ph','$d','$a','$pi')";

mysqli_query($con,$data);






?>