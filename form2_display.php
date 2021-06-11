<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<h1 class="bg-info text-dark text-center">Data Display </h1>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>College</th>
				<th>Action</th>
			</tr>
			<?php
			include "dbcon.php";
			$s= "select*from form1";
			$result = mysqli_query($con ,$s);

			while($data = mysqli_fetch_array($result)){


			?>
             <tr>
             	<td><?php  echo $data['id']  ?></td>
             	<td><?php  echo $data['name']  ?></td>
             	<td><?php  echo $data['college']  ?></td>
             	<td>
             		<a href="form1_view.php?p=<?php  echo $data['id']  ?>" class="btn btn-info">View </a>
             		<a href="form1_edit.php?p=<?php  echo $data['id']  ?>" class="btn btn-info">Edit </a>
             		<a href="form1_delete.php?p=<?php echo $data['id']  ?>" class="btn btn-info">Delete </a>
             	</td>
            </tr>
            <?php

			}
			?>
		</table>
	</div>

</body>
</html>