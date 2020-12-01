<?php
global $ID;
$ID = $_GET['id'];

include ('../control/db.php');



$connection = new db();
$conobj=$connection->OpenCon();

		$sql = "SELECT * FROM readerregistrationinfo where userId = '" . $ID."'";
		$result = $conobj->query($sql);
		$row = mysqli_fetch_array($result);	
		$connection->CloseCon($conobj);
		  

 include('../control/updateReaderCheck.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
  <form method ="post" action="">
  <table height="30px" width="600px">
  	<tr>
  		<th>Name:<input type="text" name="name" value="<?php echo $row['name'] ;?>"></th>
  		<th>Email:<input type="text" name="email" value="<?php echo $row['email'] ;?>"></th>
  		<th>Phone:<input type="text" name="phone" value="<?php echo $row['phone'] ;?>"></th>
  		<th>DOB:<input type="text" name="dob" value="<?php echo $row['dob'] ;?>"></th>
  	</tr>
	<tr>
	    
		<td><input type="submit" name="submit" value="Update"  /></td>
		<td><?php echo  $error;?></td>
	</tr>
  </table>
  </form>
</body>
</html>