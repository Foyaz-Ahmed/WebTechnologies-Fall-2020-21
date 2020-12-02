<?php
global $ID;
$ID = $_GET['id'];

include ('../control/db.php');
	  

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
  		<th>Name:<input type="text" name="name"></th>
  		<th>Email:<input type="text" name="email"></th>
  		<th>Address:<input type="text" name="address" ></th>
  		<th>Joining Date:<input type="text" name="jdate"></th>
  		<th>Phone:<input type="text" name="phone" ></th>
  		<th>DOB:<input type="text" name="dob"></th>
  	</tr>
	<tr>
	    
		<td><input type="submit" name="submit" value="Update" /></td>
		<td><?php echo  $error;?></td>
	</tr>
  </table>
  </form>
</body>
</html>