<?php
include "dbcon.php";
$id = $_POST['id'];
$n= $_POST['name'];
$c = $_POST['college'];
$g = $_POST['gender'];
$e = $_POST['education'];
$a = implode(',',$e);


$data = "update form1 SET name= '$n', college = '$c',gender = '$g', education = '$a' where id = $id";
mysqli_query($con,$data);
header("location: form2_display.php");




?>