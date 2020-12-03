<?php
include ('../control/db.php');


$connection = new db();
$conobj=$connection->OpenCon();

$sql = "SELECT userId,name, email, gender,phone, bloodGroup,dob FROM readerregistrationinfo";
$result = $conobj->query($sql);
	
$connection->CloseCon($conobj); 
	


?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<center>
   <h2>Reader Information</h2>
   <a href="addReader.php"><button><h3>Add Reader</h3></button></a><br><br>
	<table border=1 cellspacing="0">
	    <thead>
			<th>UserId</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
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
			      <td>$row[phone]</td>
			      <td>$row[bloodGroup]</td>
			      <td>$row[dob]<br></td>
			      <td><a href=updateReader.php?id=$row[userId]>Update</a> <a href=deleteReader.php?id=$row[userId]>Delete</a><br></td>";
			echo "</tr>";
			
	        }
			
		        }
				?>
			
		</tbody>
	</table>
	<?php echo "<br><br>";
	include('findReaderInfo.php');?>
	</center>
	
</body>
</html>