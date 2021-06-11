<?php
// include "dbcon.php";
//   $id = $_GET['a'];

//  $a="select * from intern where id=$id ";

 

 // echo"<pre>";
 // print_r($c);



?>
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
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>phone</th>
				<th>Address</th>
				<th>Gender</th>
				<th>College</th>
				<th>Qualification</th>
				<th>Branch</th>
				<th>Course</th>
			</tr>
			<?php
			include "dbcon.php";
			 $id = $_GET['a'];

             $a="select * from intern where id=$id ";
             $b=mysqli_query($con,$a);
			

			 $c=mysqli_fetch_array($b)


			?>
             <tr>
             	<td><?php  echo $c['id']  ?></td>
             	<td><?php  echo $c['name']  ?></td>
             	<td><?php  echo $c['email']  ?></td>
             	<td><?php  echo $c['phone']  ?></td>
             	<td><?php  echo $c['address']  ?></td>
             	<td><?php  echo $c['Gender']  ?></td>
             	<td><?php  echo $c['college']  ?></td>
             	<td><?php  echo $c['edu']  ?></td>
             	<td><?php  echo $c['branch']  ?></td>
             	<td><?php  echo $c['course']  ?></td>
             	
            </tr>
            
		</table>
	</div>
</body>
</html>