<?php
	session_start();
	include('../control/dashboardCheck.php');

?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
	</head>
	<body>
		<div>
		 <center>
			<table border="1">	  
					</tr>
						<td class="dashboard_head" colspan ="2" width ="100%" height="50px" align="center"><h1>Welcome to Your Profile</h1></td>
					</tr>
					</tr>
						<td class="side_content" height ="400"><b align="left"><h1>Account</h1></b>
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
								<legend>Change Profile</legend>	
									<table align="center">
										<tr>
											<td></td>
											<td></td>
											<td><img width="200px" src="../images/f.png" alt="Profile picture" /></td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
											<td></td>
										</tr>	
										<tr>
											<td colspan="3">
												<hr >
											</td>
										</tr>
										<tr>
									     	<td></td>
											<td></td>
											<td><input type ="submit" value ="Submit"></td>
											<td></td>
										</tr>
									</table>	
							</fieldset>
						</td>
					</tr>
					<tr>
						<td class="footer_design" colspan="2" align="center"><h4>Copyright from @glaxoserfr4.com<h4></td>
					</tr>
			</table>
			</center>
			</div>
					
			
	</body>
</html>