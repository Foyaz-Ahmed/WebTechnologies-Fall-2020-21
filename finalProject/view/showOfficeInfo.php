<?php
include ('../control/db.php');


$connection = new db();
$conobj=$connection->OpenCon();

		$sql = "SELECT userId,name, email, gender, address, joiningDate,phone, bloodGroup,dob FROM officeinfo";
		$result = $conobj->query($sql);
			
		  
	


?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<center>
   <h2>Office Information</h2>
   <a href="addType.php"><button><h3>Add Office Employee</h3></button></a><br><br>
	<table border=1 cellspacing="0">
	    <thead>
			<th>UserId</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Joining Date</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Date of Birth</th>
			<th>Action</th>
		</thead>
		 <tbody>    
			
				<?php
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[userId]</td> 
			      <td>$row[name]
				  <td>$row[email]</td>
				  <td>$row[gender]</td>
				  <td>$row[address]</td>
			      <td>$row[joiningDate]</td>
			      <td>$row[phone]</td>
			      <td>$row[bloodGroup]</td>
			      <td>$row[dob]<br></td>
			      <td><a href=updateOffice.php?id=$row[userId]>Update</a> <a href=../control/deleteOfficeCheck.php?id=$row[userId]>Delete</a><br></td>";
			echo "</tr>";
			
	        }
			
		        }
				?>
			
		</tbody>
	</table>
	<?php echo "<br><br>";
	include('findinfobyId.php');?>
	</center>
	
</body>
</html>