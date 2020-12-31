<?php
global $ID;
$ID = $_GET['catagory'];
$option1 = $option2 = $option3 = $option4 = $option5 = $option6 ="";
include ('../control/db.php');

session_start();
$position = $_SESSION["Position"]; 
include('../control/dashboardCheck.php');
$connection = new db();
$conobj=$connection->OpenCon();

$sql = "SELECT * FROM newsdetails where newscategory= '$ID'";
$result = $conobj->query($sql);
$row = mysqli_fetch_array($result);
include("../control/newsUpdateCheck.php")

?>



<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
		<link rel="stylesheet" href="../css/officeInfo.css" />
		<link rel="stylesheet" href="../css/newsdesign.css" />
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
							
							<table align="center">
								<tr>
									<?php 
										if($row['newscategory']=="Politics")
										{
											$option1 ="selected";
										}
										if($row['newscategory']=="Sports")
										{
											$option2 ="selected";
										}
										if($row['newscategory']=="Agriculture")
										{
											$option3 ="selected";
										}
										if($row['newscategory']=="Economics")
										{
											$option4 ="selected";
										}
										if($row['newscategory']=="International")
										{
											$option5 ="selected";
										}
										if($row['newscategory']=="Others")
										{
											$option6 ="selected";
										}
										echo  "<select name=catagory>
										  <option value=  'Politics' $option1>Politics</option>
										  <option value= 'Sports' $option2>Sports</option>
										  <option value= 'Agriculture' $option3>Agriculture</option>
										  <option value= 'Economics' $option4>Economics</option>
										  <option value= 'International' $option5>International</option>
										  <option value= 'Others' $option6>Others</option>
										</select>  
									</td> ";
									?>
								</tr>
								  <td><input name="headline"  value="<?php echo $row['newsheadline']; ?>"></td> 
								</tr>
								<tr>
								  <td ><input width="400px" height="400px" type="text" name="details" id="" value="<?php echo $row['newsbody']; ?>"></td> 
								</tr>
								<tr>
								<td>
								  <input type="submit" name="submit" value="Update" />
								</td>
								</tr>
						</table>
							
						</td>
					</tr>
					<tr>
						<td class="footer_design" colspan="2" align="center"><h4>Copyright from @glaxoserfr4.com<h4></td>
					</tr>
			</table>
			</center>
	<form>	
		</div>