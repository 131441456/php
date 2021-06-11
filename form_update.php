<?php
include "dbcon.php";
$id = $_POST['id'];
$u =$_POST['username'];
 $p =$_POST['password'];
 $e = $_POST['email'];
 $ph = $_POST['phone'];
 $d = $_POST['dob'];
 $a = $_POST['address'];
 $pi = $_POST['pincode'];

 // echo $id,$u,$p,$e,$ph,$d,$a,$pi;
 
 $data ="update  task2 SET username= '$u',password='$p',email = '$e', phone='$ph',dob='$d',address='$a',pincode='$pi' where id =$id";
 mysqli_query($con,$data);
 header('location:formdisplay.php');





?>