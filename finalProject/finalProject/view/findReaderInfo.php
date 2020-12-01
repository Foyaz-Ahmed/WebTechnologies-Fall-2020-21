<?php
include ('../control/findReaderInfoCheck.php');

?>

<!DOCTYPE html>

<html>

    <head>

        <title></title>

        <meta charset="UTF-8">
    </head>

    <body>
	
    <form action="" method="post">
		<table>
			<tr>
				<td>Search Id:</td>
				<td></td>
				<td><input type="text" name="id"></td>
				<td><?php 
				 if(isset($error)){
				 echo $error;} ?></td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
			<tr>
				<td>Reader Name:</td>
				<td></td>
				<td><input type="text" name="name" value="<?php
													if(isset($name)){
													echo $name;}
													?>">
				</td>									
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td></td>
				<td><input type="text" name="email" value="<?php 
															if(isset($email)){
															echo $email;
													}?>">
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td></td>
				<td><input type="text" name="gender" value="<?php 
														if(isset($gender)){
														echo $gender;}
														?>">
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td></td>
				<td><input type="text" name="phone" value="<?php 
														if(isset($phone)){
														echo $phone;}
														?>">
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
			<tr>
				<td>BloodGroup:</td>
				<td></td>
				<td><input type="text" name="bloodGroup" value="<?php 
														if(isset($bloodGroup)){
														echo $bloodGroup;}
														?>">
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
			<tr>
				<td>Date Of Birth:</td>
				<td></td>
				<td><input type="text" name="dob" value="<?php 
															if(isset($dob)){
															echo $dob;}
															?>">
                </td>
			</tr>
		<tr>	
			<td colspan=""3><input type="submit" name="search" value="Find"><br></br></td>
			</tr>
        	</table>
        </form>
	 </body>
</html>