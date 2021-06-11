<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
<div class="container">
		<table class="table table-bordered">
			<h1 class="bg-dark text-light text-center">View All Data</h1>
			<tr>
				<th>Id</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Phone</th>
				<th>DOB</th>
				<th>Address</th>
				<th>Pincode</th>
				
			</tr>
			<?php
			include "dbcon.php";
			 $id = $_GET['p'];

             $data="select * from task2 where id=$id ";
             $result=mysqli_query($con,$data);
		

			 $c=mysqli_fetch_array($result);


			?>
             <tr>
             	<td><?php  echo $c['id']  ?></td>
             	<td><?php  echo $c['username']  ?></td>
             	<td><?php  echo $c['password']  ?></td>
             	<td><?php  echo $c['email']  ?></td>
             	<td><?php  echo $c['phone']  ?></td>
             	<td><?php  echo $c['dob']  ?></td>
             	<td><?php  echo $c['address']  ?></td>
             	<td><?php  echo $c['pincode']  ?></td>
             	
             	
            </tr>
            
		</table>
	</div>
</body>
</html>