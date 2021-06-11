<?php
include "dbcon.php";
 $u = $_POST['username'];
 $p = $_POST['password'];
 $e = $_POST['email'];
 $ph = $_POST['phone'];
 $a = $_POST['address'];
 $pi = $_POST['pincode'];

 $data = "Insert into test(username,password,email,phone,address,pincode)value('$u','$p','$e','$ph','$a','$pi')";

mysqli_query($con,$data);





?>