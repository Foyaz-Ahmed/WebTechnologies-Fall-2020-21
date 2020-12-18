<?php

 
?>


<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
	</head>
	<center>
	<body background ="">
		<div>
			<table border="1" cellspacing="0">
					
					</tr>
						
						<td class="dashboard_head" colspan ="2" width ="100%" height="50px" align="center">
						
						<h1>
								Welcome to<?php echo " " .$name; ?> in your profile
								
						</h1>
						
						</td>
						
					</tr>
					</tr>
						<td class="side_content" height ="400"><b align="left"><h1>Account-<?php if(isset($_COOKIE["userId"])){
						                                                                  echo $_COOKIE["userId"];
																						  }?></h1></b>
							<hr>
							<ul>
								<li><a href="profile.php"><h3>View Profile</h3></a></li>
								<li><a href="editProfile.php"><h3>Edit Profile</h3></a></li>
								<li><a href="changeProfilePicture.php"><h3>Change Profile  Picture</h3></a></li>
								<li><a href="changePassword.php"><h3>Change Password</h3></a></li>
								<?php if($position=="Admin"){
								echo "<li><a href= manageEmployee.php><h3>Manage Employee</h3></a></li>";
								}?>
								<?php if($position=== "Admin" || $position=="Journalist"){
								echo "<li><a href= manageReader.php><h3>Manage Reader</h3></a></li>";
								echo "<li><a href= searchEmployee.php><h3>Search</h3></a></li>";
								}?>
								<?php if($position=="News Editor"){
								echo "<li><a href= manageNews.php><h3>Manage News </h3></a></li>";
								}?>
								
								<li><a href="../control/logout.php"><h3>Logout</h3></a></li>
							</ul>
							<td width ="1200px" height ="700px"></td>
						</td>
					</tr>
					<tr>
						<td class="footer_design" colspan="2" align="center"><h4>Copyright from @glaxoserfr4.com<h4></td>
					</tr>
			</table>
			</div>
      </center>			
	</body>
</html>