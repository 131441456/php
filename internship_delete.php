<?php
include "dbcon.php";
 $id=$_GET['a'];
 $data ="delete from intern where id= $id";
 mysqli_query($con,$data);
 header('location:interndisplay.php');




?>