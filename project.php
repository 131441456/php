
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<form method="post" action="project_insert.php">
<div class="container">
	<div class="row">
		<div class="col-md-12">
         <center><h1 class="bg-warning text-light">SEND US MESSAGE</h1></center>
		<div class="form-group">
			<label>Property Address</label>
			<input type="text" name="property" class="form-control">
		</div>
		</div>
	</div><br>
	<div class="row">
	  	<div class="col-md-4">
	  		<div class="form-group" >
			<label>Lattitude</label>
			<input type="text" name="lattitude" class="form-control">
		    </div>
	  	</div>
	  	<div class="col-md-4">
	  		<div class="form-group" >
			<label>Lattitude</label>
			<input type="text" name="longitude" class="form-control">
		    </div>
	  	</div>
	  	<div class="col-md-4">
	  		<div class="form-group" >
			<label>Zip Code</label>
			<input type="number" name="zipcode" class="form-control">
		    </div>
	  	</div>
	  	
	</div><br>
	<div class="row">
	  	<div class="col-md-6">
	  		<div class="form-group" >
			<label>Sale or Rent price(on digit)</label>
			<input type="number" name="sale_or_rent" class="form-control">
		    </div>
		    <p>Example value 43000</p>
	  	</div>
	  	<div class="col-md-6">
	  		<div class="form-group" >
			<label>Price Postfix</label>
			<input type="number" name="price" class="form-control">
		    </div>
		    <p>Example value per month</p>
	  	</div>
	  	
	    <br>
	
	  	<div class="col-md-6">
	  		<div class="form-group" >
			<label>Area size(only digit)</label>
			<input type="number" name="area" class="form-control">
		    </div>
		    <p>Example value 2300</p>
	  	</div>
	  	<div class="col-md-6">
	  		<div class="form-group" >
			<label>Size Postfix</label>
			<input type="number" name="size" class="form-control">
		    </div>
		    <p>Example value per sqft</p>
	  	</div>
	  	
	    <br>
	
	  	<div class="col-md-6">
	  		<div class="form-group" >
			<label>Bedroom</label>
			<input type="text" name="bedroom" class="form-control">
		    </div>
		   
	  	</div>
	  	<div class="col-md-6">
	  		<div class="form-group" >
			<label>Bathroom</label>
			<input type="text" name="bathroom" class="form-control">
		    </div>
		   
	  	</div>
	  	
	    
	
	  	<div class="col-md-6"><br>
	  		<div class="form-group" >
			<label>Reception</label>
			<input type="text" name="reception" class="form-control">
		    </div>
		   
	  	</div>
	  	<div class="col-md-6"><br>
	  		<div class="form-group" >
			<label>Garage</label>
			<input type="text" name="garage" class="form-control">
		    </div>
		   
	  	</div>
	  	
	    <br>
	
		<div class="col-md-6"><br>
			<div class="form-group" >
			<label>Features</label><br>
			<input type="checkbox" name="feature[]" value="air_conditioner">Air conditioner<br>
            <input type="checkbox" name="feature[]" value="cctv">CCTV   <br>  
            <input type="checkbox" name="feature[]" value="lift">Lift<br>
            <input type="checkbox" name="feature[]" value="helpline">24 Emergency halpline
		    </div>
		</div>
		
		<div class="col-md-6"><br>
			<div class="form-group" >
			<label>Property Id</label>
			<input type="text" name="pid" class="form-control">
		    </div>
		</div>
		<div class="col-md-6"><br>
			<div class="form-group" >
			<label>Home Type</label>
			<input type="text" name="home" class="form-control">
		    </div>
		</div>
		<div class="col-md-6"><br>
			<label>Gender</label><br>
			<input type="radio" name="gender" value="male">Male
	        <input type="radio" name="gender" value="female">FeMale
	        <input type="radio" name="gender" value="other">other
        
		</div>
		<div class="col-md-6"><br>
			<select name="houses">
			<option value="select">Select</option>
			<option value="flat">Flat</option>
			<option value="own">Own house</option>
			<option value="rent">Rent house</option>
			</select>
		</div>
	    
		
	</div>

</div>
<center><input type="submit" name="a" value="Submit" class=" btn bg-warning text-light"></center>
</form>

</body>
</html>