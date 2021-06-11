<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    	<table class="table table-bordered">
    		<h1 class="bg-dark text-light text-center">view all data</h1>
    		<tr>
    			<th>Id</th>
    			<th>Name</th>
    			<th>College</th>
    			<th>Gender</th>
    			<th>Education</th>
    		</tr>
    		<?php
             include "dbcon.php";
             $id =$_GET['p'];

             $a ="select * from form1 where id = $id";

             $data = mysqli_query($con,$a);

             $result = mysqli_fetch_array($data);
            ?>
            <tr>
            	<td><?php echo $result['id'] ?></td>
            	<td><?php echo $result['name'] ?></td>
            	<td><?php echo $result['college'] ?></td>
            	<td><?php echo $result['gender'] ?></td>
            	<td><?php echo $result['education'] ?></td>
            </tr>
    		
    	</table>
    	
    	
    </div>
</body>
</html>