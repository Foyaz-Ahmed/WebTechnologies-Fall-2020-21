<?php

session_start();

$position = $_SESSION["Position"];
include('../control/dashboardCheck.php');
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
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
		<link rel="stylesheet" href="../css/officeInfo.css" />
	</head>
	<body>
		<div>
		<center>
		<form method="post" action="">
			<table border="1" class="table_update">	
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
						 <div id="table_update">
						 <center>
							<form method ="post" action="">
							  <table height="30px" width="600px">
								<tr>
									<th>Name:<input type="text" name="name" value="<?php echo $row['name'] ;?>"></th></tr>
								    <tr><th>Email:<input type="text" name="email" value="<?php echo $row['email'] ;?>"></th></tr>
									<tr><th>Phone:<input type="text" name="phone" value="<?php echo $row['phone'] ;?>"></th></tr>
									<tr><th>DOB:<input type="text" name="dob" value="<?php echo $row['dob'] ;?>"></th></tr>
								</tr>
								<tr>
									
									<td><input type="submit" name="submit" value="Update"  /></td>
									<td><?php echo  $error;?></td>
								</tr>
							  </table>
							  </form>
							  </center>
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


