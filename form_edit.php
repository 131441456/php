<?php
include "dbcon.php";
$id = $_GET['p'];
 $data="select * from task2 where id=$id ";
 $result=mysqli_query($con,$data);
$c=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="form_update.php">
		<input type="text" name="id" value="<?php echo $c['id']?>">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php echo $c['username'] ?>">
	    </div>
	    <div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $c['password'] ?>">
	    </div>
	    <div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $c['email'] ?>">
	    </div>
	    <div class="form-group">
			<label>Phone</label>
			<input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo $c['phone'] ?>">
	    </div>
	    <div class="form-group">
            <label>DOB</label>
            <input type="date" name="dob" class="form-control" placeholder="Enter DOB" value="<?php echo $c['dob'] ?>">
          </div>
	    <div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $c['address'] ?>">
	    </div>
	    <div class="form-group">
			<label>Pincode</label>
			<input type="number" name="pincode" class="form-control" placeholder="Enter Pincode" value="<?php echo $c['pincode'] ?>">
	    </div>
        <button class="btn btn-info">update</button>
	</form>

</body>
</html>