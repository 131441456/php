<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="form_insert.php">
		<div class="form-group" style="width:50%;">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Enter Username">
	    </div>
	    <div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Enter Password">
	    </div>
	    <div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Enter Email">
	    </div>
	    <div class="form-group">
			<label>Phone</label>
			<input type="number" name="phone" class="form-control" placeholder="Enter Phone Number">
	    </div>
	    <div class="form-group">
            <label>DOB</label>
            <input type="date" name="dob" class="form-control" placeholder="Enter DOB">
          </div>
	    <div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control" placeholder="Enter Address">
	    </div>
	    <div class="form-group">
			<label>Pincode</label>
			<input type="number" name="pincode" class="form-control" placeholder="Enter Pincode">
	    </div>
        <button class="btn btn-info">submit</button>
	</form>

</body>
</html>