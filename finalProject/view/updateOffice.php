<?php
global $ID;
$ID = $_GET['id'];
$radio1 =$radio2 = $radio3 ="";
$option1 = $option2 = $option3 = $option4 = $option5 = $option6 =""; 

include ('../control/db.php');



		$connection = new db();
		$conobj=$connection->OpenCon();

		$sql = db::OfficeProfileEdit($conobj,$ID);
		$result = $conobj->query($sql);
		$row = mysqli_fetch_array($result);	
		//echo $row['bloodGroup'];
		//echo $row['bloodGroup'];
		$connection->CloseCon($conobj);
		  

 include('../control/updateOfficeCheck.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<center>
<br><br><br>
  <form method ="post" action="">
  <table height="30px" width="600px">
  	<tr>
  		<td>Name</td>
  		<td></td>
  		<td><input type="text"  name="mname" value="<?php echo $row['name']?>"/></td>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
  		<td>Email</td>
  		<td></td>
  		<td><input type="text"  name="memail" value="<?php echo $row['email']?>"/></td>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
  		<td>Gender</td>
  		<td></td>
  		<td>
			<?php 

			  if($row["gender"]=="male")
			  {
				  $radio1="checked";
			  }
			else  if($row["gender"]=="female")
			  {
				  $radio2="checked";
			  }
			  else{
				  $radio3="checked";
			  }
			
			
		    echo "<input type='radio' value='male' name='gender' $radio1/>Male
			<input type='radio' value='female' name='gender' $radio2 />Female
			<input type='radio' value='others' name='gender' $radio3 />Others</td>";
			?>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
  		<td>Address</td>
  		<td></td>
  		<td><input type="text"  name="address" value="<?php echo $row['address']?>"/></td>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
  		<td>Joining  Date</td>
  		<td></td>
  		<td><input type="date"  name="jdate" value="<?php echo $row['joiningDate']?>"/></td>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
  		<td>Phone</td>
  		<td></td>
  		<td><input type="tel"  name="mphone" value="<?php echo $row['phone']?>"/></td>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
  		<td>Blood Group</td>
  		<td></td>
  		<td>
		<?php 
			if($row['bloodGroup']=="A poitive")
			{
				$option1 ="selected";
			}
			if($row['bloodGroup']=="A Negetive")
			{
				$option2 ="selected";
			}
			if($row['bloodGroup']=="B poitive")
			{
				$option3 ="selected";
			}
			if($row['bloodGroup']=="B negetive")
			{
				$option4 ="selected";
			}
			if($row['bloodGroup']=="O positive")
			{
				$option5 ="selected";
			}
			if($row['bloodGroup']=="O Negetive")
			{
				$option6 ="selected";
			}
		    echo  "<select name=bloodGroup>
			  <option value=  'A positive' $option1>A+</option>
			  <option value= 'A Negetive' $option2>A-</option>
			  <option value= 'B positive' $option3>B+</option>
			  <option value= 'B negetive' $option4>B-</option>
			  <option value= 'O positive' $option5>O+</option>
			  <option value= 'O Negetive' $option6>O-</option>
			</select>  
		</td> ";
		?>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
  		<td>Date of  Birth</td>
  		<td></td>
  		<td><input type="date"  name="date" value="<?php echo $row['dob']?>"/></td>
  	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
	    
		<td><input type="submit" name="submit" value="Update" /></td>
		<td><?php echo  $error;?></td>
	</tr>
  </table>
  </form>
  </center>
</body>
</html>