<?php
include ('../control/db.php');

session_start();
$position = $_SESSION["Position"]; 
include('../control/dashboardCheck.php');
$connection = new db();
$conobj=$connection->OpenCon();

$sql = "SELECT * FROM officeinfo";
$result = $conobj->query($sql);
			
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
						<a href="addType.php"> <input type="button" id="button" align="center" value="Add Employee"></a><br><br>
		
						 <div id="table">
							<table  class="table" border=1 cellspacing="0" align="center">
							   <div class="table_head">
								<thead class="table_head">
									<th>UserId</th>
									<th>Name</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Joining Date</th>
									<th>Phone</th>
									<th>Blood Group</th>
									<th>Date of Birth</th>
									<th>Action</th>
								</thead>
								</div>
								 <tbody class="table_body">    
									
										<?php
											if ($result->num_rows > 0) {
								
										while($row = $result->fetch_assoc()) {
									  
									 echo "<tr>";
									echo "<td>$row[userId]</td> 
										  <td>$row[name]
										  <td>$row[email]</td>
										  <td>$row[gender]</td>
										  <td>$row[address]</td>
										  <td>$row[joiningDate]</td>
										  <td>$row[phone]</td>
										  <td>$row[bloodGroup]</td>
										  <td>$row[dob]<br></td>
										  <td id=action><a href=updateOffice.php?id=$row[userId]>Update</a> <a href=../control/deleteOfficeCheck.php?id=$row[userId]>Delete</a><br></td>";
									echo "</tr>";
									
									}
									
										}
										?>
									
								</tbody>
							
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
	</body>
</html>







