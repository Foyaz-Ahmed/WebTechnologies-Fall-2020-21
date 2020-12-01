<?php
include('../control/changePasswordValidation.php');
include('../control/changePasswordCheck.php');

//include('../control/dashboardCheck.php');


?>


<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
	</head>
	<body>
		<div>
		<center>
		<form method="post" action="">
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
								<legend><h5>Change Password</h5></legend>
								<table align="center">
									<tr>
										<td>Current Password:</td>
										<td><input type ="text" name = "pass" method ="post"></td>
										<td></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>New Password:</td>
										<td><input type ="password" name ="cpass" method =""></td>
										<td><td>
										<td></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Re-type New Passwprd:</td>
										<td><input type="password" name="rpass" /></td>
										<td><td>
									</tr>
									<tr>
										<td colspan="3"><hr></td>
									</tr>
										<td><?php
										if(isset($message)){
										echo "<b>$message<b>";
										echo "<b>$error</b>";
										echo "<b>$passError</b>";
										}
										?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
									<tr>
											<td></td>
											<td><input type ="submit" value ="submit" name="submit"></td>
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
			</center>
	<form>	
		</div>
	</body>
</html>