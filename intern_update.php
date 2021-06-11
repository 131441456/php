<?php
include "dbcon.php";
$id = $_POST['id'];
 $n = $_POST ['name'];
 $em = $_POST ['email'];
 $p =$_POST ['phone'];
 $a = $_POST ['address'];
 $g = $_POST['Gender'];
 $co = $_POST ['college'];
 $e = $_POST ['edu'];
 $b = $_POST ['branch'];
 $c = $_POST ['course'];

  // "echo $n, $em,$p,$a,$g,$co,$e,$b,$c;
   $data ="update intern SET name = '$n' , email = '$em', phone ='$p', address='$a',Gender = '$g',college = '$co', edu='$e',branch = '$b',course = '$c' where id = $id";
 mysqli_query($con,$data);
 header('location: interndisplay.php ');

?>