<?php
include "dbcon.php";
$id = $_GET['p'];
$data = "delete from employee where id = $id";
mysqli_query($con,$data);
header("location:employee_display.php");






?>