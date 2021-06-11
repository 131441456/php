<?php
include "dbcon.php";

 $u = $_POST ['a'];
 $p = $_POST ['b'];

 // echo $u,$p;

// echo $data = "insert into student(username,password)value('$u','$p')";

 $data = "insert into student(username,password)value('$u','$p')";
 mysqli_query($con,$data);












?>