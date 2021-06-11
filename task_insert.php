<?php
include "dbcon.php";

 $n = $_POST ['name'];
 $e = $_POST ['email'];
 $c = $_POST ['city'];
 $p =$_POST ['Phone'];

 
 $data = "insert into task(name,email,city,phone)value('$n','$e','$c','$p')";
 mysqli_query($con,$data);
?>