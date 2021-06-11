<?php
// function itm()
// {
// 	echo "hello shivi";
// }
// itm();

$var = 35000;
function getvar($other){
	$var= 35000 + $other;
	return $var;
}
 $other=getvar(5000);
echo $var;
?>