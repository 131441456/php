<?php
include "dbcon.php";
$id =$_GET['p'];

$a ="select * from form1 where id = $id";

$data = mysqli_query($con,$a);

$result = mysqli_fetch_array($data);

echo $a=$result['education'];

$b = explode(',',$a);

?>
<form method="post" action="form1_update.php">
	<input type="hidden" name="id" value="<?php echo $result['id']?>">
    
		Name:
		<input type="text" name="name" value="<?php echo $result['name']?>" >
   
		<br>
		<br>
        College: 
        <select name="college">
			<option value="select">Select</option>
			<option value="rjit" 
            <?php
             if($result['college']=='rjit'){
             	echo "selected";
             }


            ?>
			>RJIT</option>
			<option value="mpct"
             <?php
             if($result['college']=='mpct'){
             	echo "selected";
             }
            ?>
            >mpct</option>
			<option value="itm"
             <?php
             if($result['college']=='itm'){
             	echo "selected";
             }


            ?>
            >itm</option>
			<option value="jaincollege"
			<?php
             if($result['college']=='jaincollege'){
             	echo "selected";
             }


            ?>
            >jain college</option>
		</select>
			<br>
			<br>
        Gender:
        <input type="radio" name="gender" value="male"
        <?php
             if($result['gender']=='male'){
             	echo "checked";
             }


            ?>
            >Male
	    <input type="radio" name="gender" value="female"
         <?php
             if($result['gender']=='female'){
             	echo "checked";
             }


            ?>
	    >FeMale
	    <input type="radio" name="gender" value="other"
         <?php
             if($result['gender']=='other'){
             	echo "checked";
             }


            ?>
	    >other
        <br>
        <br>
        Education:
        <input type="checkbox" name="education[]" value="mca"
        <?php
        if(in_array( 'mca',$b )){
            echo "checked";
        }
        ?>

        >MCA
        <input type="checkbox" name="education[]" value="ca"
        <?php
        if(in_array('ca',$b)){
            echo "checked";
        }
        ?>
        >CA      
        <input type="checkbox" name="education[]" value="ma"
        <?php
        if(in_array('ma',$b)){
            echo "checked";
        }
        ?>
        >MA
        <input type="checkbox" name="education[]" value="bba"
        <?php
        if(in_array('bba',$b)){
            echo "checked";
        }
        ?>

        >BBA

        <br>
        <br>
       <input type="submit" name="a" value="update">
		


	</form>