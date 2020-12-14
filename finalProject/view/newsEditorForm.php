<?php
	//include('../control/registeValidation.php');
	include('header.php');
	include('menubar.php');
	include('../control/officeJournalistValidation.php');
	include('../control/newsEditorFormCheck.php');

	if(isset($_SESSION['mname']) || isset($_SESSION['userId']) || isset($_SESSION['jdate']) || isset($_SESSION['memail']) || isset( $_SESSION['mpassword']) || isset($_SESSION['mcpassword']) || isset($_SESSION['address']) || isset($_SESSION['gender']) || isset($_SESSION['mphone']) || isset($_SESSION['bloodgroup']) || isset($_SESSION['date']))
	{
	header("location: formSuccessfull.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="../css/registration.css" />
	<script src="../js/validated.js"></script>
</head>
<body>
<center>
	<div class="register_wrapper">
	<form action="" onsubmit="return validateForm()" method="post"  enctype="multipart/form-data">
			<legend><h5>Fill up the Registration Form:</h5></legend>
			<table align="center">
				<tr>
					<td>Employee Name:</td>
					<td></td>
					<td><input type ="text" name = "mname" id="name"></td>
					<td><?php echo $nameError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>User Id:</td>
					<td></td>
					<td ><input type ="text" name = "userId" id="id"></td>
					<td><?php echo $userIdError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Email:</td>
					<td></td>
					<td><input type ="email" name ="memail" id="email"><button title ="hints:sample@com"><b>i</b></button></td>
					<td><?php echo $emailErr;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Password</td>
					<td></td>
					<td><input type ="password" name ="mpassword" id="password"></td>
					<td><?php echo $passErr;
					           echo $validPass;
							   echo $passError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Confirm Password:</td>
					<td></td>
					<td><input type ="password" name ="mcpassword" id="cpassword">
					<td><?php echo $cPassError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Address:</td>
					<td></td>
					<td><input type ="text" name ="address" id="maddress">
					<td><?php echo $addressError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Joining Date:</td>
					<td></td>
					<td><input type ="date" name ="jdate" id="mdate">
					<td><?php echo $jDateError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td><h4>Gender:<h4></td>
					<td></td>
					<td><input type ="radio" name ="gender" value ="male" id="male">Male
					<input type ="radio" name ="gender" value ="female" id="female">Female
					<input type ="radio" name ="gender" value ="female" id="others">Others
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
						  <option value=" A positive" id="apositive">A+</option>
						  <option value="A Negetive" id="anegetive">A-</option>
						  <option value="B positive" id="bpositive">B+</option>
						  <option value="B negetive" id="bnegetive">B-</option>
						  <option value="O positive" id="opositive">O+</option>
						  <option value="O Negetive" id="onegetive">O-</option>
						</select>  
					</td>
					<td><?php echo $bloodgroupError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Phone Number:</td>
					<td></td>
					<td><input type="tel" name="mphone" id="phone"></td>
					<td><?php echo $noError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Choose Profile Picture:</td>
					<td></td>
					<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
					<td><?php echo $fileError; ?></td>
					
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Date Of Birth:</td>
					<td></td>
					<td><input type ="date" name ="date" id="dob"></td>
					<td><?php echo $dobError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td><input name="submit" type="submit" value="Register"></td>
					<td></td>
					<td></td>
				</tr>
				
			</table>
	</form>
	 <?php echo $error; ?>
	 </div>
	</center>
	<?php include('footer.php');?>
</body>
</html>
