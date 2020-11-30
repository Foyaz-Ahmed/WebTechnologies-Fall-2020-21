<?php
	//include('../control/registeValidation.php');
	include('header.php');
	include('../control/officeJournalistValidation.php');
	include('../control/newsEditorFormCheck.php');

	if(isset($_SESSION['mname']) || isset($_SESSION['userId']) || isset($_SESSION['jdate']) || isset($_SESSION['memail']) || isset( $_SESSION['mpassword']) || isset($_SESSION['mcpassword']) || isset($_SESSION['address']) || isset($_SESSION['gender']) || isset($_SESSION['mphone']) || isset($_SESSION['bloodgroup']) || isset($_SESSION['date']))
	{
	header("location: formSuccessfull.php");
	}
?>
<!DOCTYPE html>
<html>
<body>
<center>
	<form action="" method="post" enctype="multipart/form-data">
		<fieldset>	
			<legend><h5>Fill up the Registration Form:</h5></legend>
			<table align="center">
				<tr>
					<td>Employee Name:</td>
					<td></td>
					<td><input type ="text" name = "mname"></td>
					<td><?php echo $nameError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>User Id:</td>
					<td></td>
					<td ><input type ="text" name = "userId"></td>
					<td><?php echo $userIdError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Email:</td>
					<td></td>
					<td><input type ="email" name ="memail"><button title ="hints:sample@com"><b>i</b></button></td>
					<td><?php echo $emailErr;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Password</td>
					<td></td>
					<td><input type ="password" name ="mpassword"></td>
					<td><?php echo $passErr;
					          // echo $validPass;
							    echo $passError;
							   ?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Confirm Password:</td>
					<td></td>
					<td><input type ="password" name ="mcpassword">
					<td><?php echo $cPassError;
								//echo validPass;
								 echo $passError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Address:</td>
					<td></td>
					<td><input type ="text" name ="address">
					<td><?php echo $addressError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Joining Date:</td>
					<td></td>
					<td><input type ="date" name ="jdate">
					<td><?php echo $jDateError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Gender:</td>
					<td><input type ="radio" name ="gender" value ="male">Male</td>
					<td>
					<input type ="radio" name ="gender" value ="female">Female
					<input type ="radio" name ="gender" value ="female">Others
					</td>
					<td><?php echo $genderError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Blood Group:</td>
					<td></td>
					<td>
						<select name="bloodgroup">
						  <option value="">-- select one --</option>
						  <option value=" A positive">A+</option>
						  <option value="A Negetive">A-</option>
						  <option value="B positive">B+</option>
						  <option value="B negetive">B-</option>
						  <option value="O positive">O+</option>
						  <option value="O Negetive">O-</option>
						</select>  
					</td>
					<td><?php echo $bloodgroupError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Phone Number:</td>
					<td></td>
					<td><input type="tel" name="mphone"></td>
					<td><?php echo $noError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Choose profile Picture:</td>
					<td></td>
					<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
					<td></td>
					<td><? echo $fileError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Date Of Birth:</td>
					<td></td>
					<td><input type ="date" name ="date"></td>
					<td><?php echo $dobError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td><input name="submit" type="submit" value="Register"></td>
					<td><input type="reset" value="reset" /></td>
					<td></td>
					<td></td>
				</tr>
				
			</table>
	
	    </fieldset>	
	</form>
	 <?php echo $error; ?>
	 </center>
    
</body>
<?php include('footer.php');?>
</html>
