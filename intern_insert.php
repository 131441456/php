<?php
include"dbcon.php";
 $n = $_POST ['name'];
 $em = $_POST ['email'];
 $p =$_POST ['phone'];
 $a = $_POST ['address'];
 $g = $_POST['Gender'];
 $co = $_POST ['college'];
 $e = $_POST ['edu'];
 $b = $_POST ['branch'];
 $c = $_POST ['course'];

 echo  $data = "insert into intern(name,email,phone,address,Gender,college,edu,branch,course)value('$n','$em','$p','$a', '$g', '$co','$e','$b','$c')";

 mysqli_query($con,$data);




?>