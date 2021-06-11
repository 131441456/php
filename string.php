<?php
// $name="shivini";
// echo strlen($name);

// $len=strlen($name);
// if($len<=5){
// 	echo"your pass should be more than 5 char long";
// }
// else{
// 	echo "pass is wrong";
// }

$name =strtoupper("shivani bansal");
echo $name;

$username="shivanibansal8962@gmail.com";
 $entered = strtolower("shivanibansal8962@gmail.com");
if($username ==$entered){
	echo "correct";
}

else{
	echo "please check your username";
}
?>