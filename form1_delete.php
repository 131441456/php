<?php
include "dbcon.php";
 $id=$_GET['p'];
 $data ="delete from form1 where id= $id";
 mysqli_query($con,$data);
 header('location:form2_display.php');




?>