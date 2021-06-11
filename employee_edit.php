<?php
include "dbcon.php";
$id =$_GET['p'];

$a ="select * from employee where id = $id";

$data = mysqli_query($con,$a);

$result = mysqli_fetch_array($data);





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="employee_update.php">
		<input type="text" name="id" value="<?php echo $result['id']?>">
		Name:
		<input type="text" name="name" value="<?php echo $result['name'] ?>">
		<br>
		Email:
		<input type="email" name="email" value="<?php echo $result['email'] ?>">
		<br>
		Phone No:
		<input type="text" name="phone" value="<?php echo $result['phone'] ?>">
		<br>
		Password:
		<input type="password" name="password" value="<?php echo $result['password'] ?>">
		<br>
		<input type="submit" value="submit">
	</form>

</body>
</html>