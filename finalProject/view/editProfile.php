<?php
session_start();
include('../control/dashboardcheck.php');
//include('../control/registeValidation.php');
//include('../control/officeJournalistValidation.php');
include('../control/editProfileValidation.php');
include('../control/editProfileCheck.php');

?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
	</head>
	<body>
	<center>
		<div>
		  <form action="" method="post">
			<table border="1">	
					</tr>
						<td colspan ="2" width ="100%" height="50px" align="center"><h1>Welcome to Your Profile</h1></td>
					</tr>
					</tr>
						<td height ="400"><b align="left"><h1>Account</h1></b>
							<hr>
							<ul>
								<li><a href="dashboard.php"><h3>Dashboard</h3></a></li>
								<li><a href="profile.php"><h3>View Profile</h3></a></li>
								<li><a href="editProfile.php"><h3>Edit Profile</h3></a></li>
								<li><a href="changeProfilePicture.php"><h3>Change Profile  Picture</h3></a></li>
								<li><a href="changePassword.php"><h3>Change Password</h3></a></li>
								<?php if($position=="Admin"){
								echo "<li><a href= manageEmployee.php><h3>Manage Employee</h3></a></li>";
								}?>
								<?php if($position=== "Admin" || $position=="Journalist"){
								echo "<li><a href= manageReader.php><h3>Manage Reader</h3></a></li>";
								}?>
								<?php if($position=="News Editor"){
								echo "<li><a href= manageNews.php><h3>Manage News </h3></a></li>";
								}?>
								<li><a href="../control/logout.php"><h3>Logout</h3></a></li>
							</ul>
						</td>
						<td width ="1200px" height ="700px">
							<fieldset>	
								<legend><h5>Edit Profile</h5></legend>
								<table align="center">
									<tr>
										<td>Name:</td>
										<td></td>
										<td><input type ="text" name = "mname" method ="post"></td>
										<td><?php echo $nameError;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Email:</td>
										<td></td>
										<td><input type ="email" name ="memail" method ="post"><button title ="hints:sample@com"><b>i</b></button></td>
										<td><?php echo $emailErr;?></td>
									</tr>
									
									<tr>
										<td>Gender:</td>
										<td><input type ="radio" name ="gender" value ="male" method ="post">Male</td>
										<td>
										<input type ="radio" name ="gender" value ="female" method ="post">Female
										<input type ="radio" name ="gender" value ="female" method ="post">Others
										</td>
										<td><?php echo $genderError;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Address:</td>
										<td></td>
										<td><input type ="text" name="address" method ="post"></td>
										<td><?php echo $addressError;?></td>
									</tr>
									<tr><td colspan="4"><hr></td></tr>
									<tr>
										<td>Blood Group:</td>
										<td></td>
									<!--	<td>
											<select name="bloodgroup">
											  <option value="">-- select one --</option>
											  <option value=" A Positive">A+</option>
											  <option value="A Negetive">A-</option>
											  <option value="B Positive">B+</option>
											  <option value="B Negetive">B-</option>
											  <option value="O Positive">O+</option>
											  <option value="O Negetive">O-</option>
											</select>  
										</td>
										<td><?php echo $bloodgroupError;?></td>
										-->
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Phone Number:</td>
										<td></td>
										<td><input type="tel" name="mphone" method ="post"></td>
										<td><?php echo $noError;?></td>
										<td><?php echo $numberrError;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Date Of Birth:</td>
										<td></td>
										<td><input type ="date" name ="date" method ="post"></td>
										<td><?php echo $dobError;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td><input type ="submit" value ="Submit" name="submit"></td>
										<td></td>
										<td><input type ="reset"  value ="Reset"></td>
										<td></td>
									</tr>
									
								</table>
							</fieldset>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><h4>Copyright from @glaxoserfr4.com<h4></td>
					</tr>
			</table>
		</form>	
		</div>
	 </center>
	</body>
</html>