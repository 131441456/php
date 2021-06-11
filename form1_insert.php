<?php
include "dbcon.php";
$n =$_POST['name'];
$c =$_POST['college'];
$g =$_POST['gender'];
$e =$_POST['education'];

// echo $n,$c,$g,$e;
$a=implode(',', $e);//array to string convert
  $a;

echo $data = "insert into form1(name,college,gender,education)value('$n','$c','$g','$a')";
mysqli_query($con,$data);










?>