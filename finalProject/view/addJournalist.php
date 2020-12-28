<?php

session_start();
include('../control/officeJournalistValidation.php');
include('../control/addJournalistCheck.php');
$position = $_SESSION["Position"]; 
include('../control/dashboardCheck.php');


?>


<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
		<link rel="stylesheet" href="../css/officeInfo.css" />
	</head>
	<body>
		<div>
		<center>
		<form method="post" action="">
			<table border="1">	
					</tr>
						<td class="dashboard_head" colspan ="2" width ="100%" height="50px" align="center">
						<h1>
								Welcome to<?php echo " " .$name; ?> in your profile
								
						</h1></td>
					</tr>
					</tr>
						<td class="side_content" height ="400"><b align="left"><h1>Account-<?php if(isset($_COOKIE["userId"])){
						                                                                  echo $_COOKIE["userId"];
																						  }?></h1></b></b>
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
									<form action="" method="post" enctype="multipart/form-data">
		<fieldset>	
			<legend><h5>Jounralist Insert:</h5></legend>
			<table align="center" class="wholeadd_table">
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
					           echo $validPass;
							    echo $passError;?></td>
				</tr>
				<tr><td colspan="4"><hr></td></tr>
				<tr>
					<td>Confirm Password:</td>
					<td></td>
					<td><input type ="password" name ="mcpassword">
					<td><?php echo $cPassError;?></td>
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
					<td><? echo $fileError; ?></td>
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
					<td></td>
					<td></td>
				</tr>
				
			</table>
	
	    </fieldset>	
	</form>
	 <?php echo $error; ?>
						</td>
					</tr>
					<tr>
						<td class="footer_design" colspan="2" align="center"><h4>Copyright from @glaxoserfr4.com<h4></td>
					</tr>
			</table>
			</center>
	<form>	
		</div>
	</body>
</html>
