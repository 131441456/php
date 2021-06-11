<?php
include "dbcon.php";
$p=$_POST['property'];
$la=$_POST['lattitude'];
$lo=$_POST['longitude'];
$z=$_POST['zipcode'];
$s=$_POST['sale_or_rent'];
$pr=$_POST['price'];
$a=$_POST['area'];
$si=$_POST['size'];
$b=$_POST['bedroom'];
$ba=$_POST['bathroom'];
$r=$_POST['reception'];
$g=$_POST['garage'];
$f=$_POST['feature'];
 $ats=implode(',',$f);
$pid=$_POST['pid'];
$h=$_POST['home'];
$ge=$_POST['gender'];
$ho=$_POST['houses'];

//echo $p,$la,$lo,$z,$s,$pr,$a,$si,$b,$ba,$r,$g,$ats,$pid,$h,$ge,$ho;


 echo $data = "insert into project(property,lattitude,longitude,zipcode,sale_or_rent,price,area,size,bedroom,bathroom,reception,garage,feature,pid,home,gender,houses)value('$p','$la','$lo','$z','$s','$pr','$a','$si','$b','$ba','$r','$g','$ats','$pid','$h','$ge','$ho')";
 $result=mysqli_query($con,$data);

// if($result){
// 	echo "connected";
// }
// else{
// 	echo "not connected";
// }


?>