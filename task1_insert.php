<?php
include"dbcon.php";
 $n = $_POST ['name'];
 $c = $_POST ['city'];
 $p =$_POST ['phone'];
 $e = $_POST ['email'];
 $a = $_POST ['address'];
 $c = $_POST ['college'];

 $data = "insert into task1(name,city,phone,email,address,college)value('$n','$c','$p','$c','$a','$c')";

 mysqli_query($con,$data);




?>