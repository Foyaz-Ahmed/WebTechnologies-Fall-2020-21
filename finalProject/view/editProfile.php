<?php
$radio1="";
$radio2="";
$radio3="";
$option1 = $option2 = $option3 = $option4 = $option5 = $option6 =""; 
session_start();
//include('../control/registeValidation.php');
//include('../control/officeJournalistValidation.php');
include('../control/editProfileValidation.php');
include('../control/dashboardCheck.php');
include('../control/editProfileCheck.php');

//echo $row['gender'];
//echo $row['gender'];

?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
		<link rel="stylesheet" href="../css/profiledesign.css" />
		<link rel="stylesheet" href="../css/officeInfo.css" />
	</head>
	<body>
	<center>
		<div>
		  <form action="" method="post">
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
								<li><a href="profile.php"><h3>View Profile</h3></a></li>
								<li><a href="editProfile.php"><h3>Edit Profile</h3></a></li>
								<li><a href="changePassword.php"><h3>Change Password</h3></a></li>
								<?php if($position=="Admin"){
								echo "<li><a href= manageEmployee.php><h3>Manage Employee</h3></a></li>";
								}?>
								<?php if($position=== "Admin" || $position=="Journalist"){
								echo "<li><a href= manageReader.php><h3>Manage Reader</h3></a></li>";
								echo "<li><a href= searchEmployee.php><h3>Search Employee by Name</h3></a></li>";
								echo "<li><a href= searchReader.php><h3>Search Reader</h3></a></li>";
								}?>
								<?php if($position=="News Editor"){
								echo "<li><a href= manageNews.php><h3>Manage News </h3></a></li>";
								echo "<li><a href= searchReader.php><h3>Search Reader by Name</h3></a></li>";
								}?>
								
								<li><a href="../control/logout.php"><h3>Logout</h3></a></li>
								
							</ul>
						</td>
						<td width ="1200px" height ="700px">
							<fieldset>	
								<legend><h5>Edit Profile</h5></legend>
								<table class="profile_wrap" align="center">
									<tr>
										<td>Name:</td>
										<td></td>
										<td><input type ="text" name = "mname" method ="post" value="<?php if(isset($row['name']))
										{echo $row['name'];}?>"></td>
										<td><?php echo $nameError;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Email:</td>
										<td></td>
										<td><input type ="email" name ="memail" method ="post"  value="<?php echo $row['email'];?>"><button title ="hints:sample@com"><b>i</b></button></td>
										<td><?php echo $emailErr;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Gender:</td>
										<td></td>
										<td>
										<?php 

										  if($row["gender"]=="male")
										  {
											  $radio1="checked";
										  }
										else  if($row["gender"]=="female")
										  {
											  $radio2="checked";
										  }
										  else{
											  $radio3="checked";
										  }
										
										
									echo 	"<input type='radio' value='male' name='gender' $radio1/>Male
										     <input type='radio' value='female' name='gender' $radio2 />Female
										     <input type='radio' value='others' name='gender' $radio3 />Others</td>
										<td></td>";
										?>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Address:</td>
										<td></td>
										<td><input type ="text" name="address" method ="post"  value="<?php echo $row['address'];?>"></td>
										<td><?php echo $addressError;?></td>
									</tr>
									<tr>
									<td>Joining  Date</td>
									<td></td>
									<td><input type="date"  name="jdate" value="<?php echo $row['joiningDate']?>"/></td>
									</tr>
									<tr>
									<td>Blood Group</td>
									<td></td>
									<td>
									<?php 
										if($row['bloodGroup']=="A poitive")
										{
											$option1 ="selected";
										}
										if($row['bloodGroup']=="A Negetive")
										{
											$option2 ="selected";
										}
										if($row['bloodGroup']=="B poitive")
										{
											$option3 ="selected";
										}
										if($row['bloodGroup']=="B negetive")
										{
											$option4 ="selected";
										}
										if($row['bloodGroup']=="O positive")
										{
											$option5 ="selected";
										}
										if($row['bloodGroup']=="O Negetive")
										{
											$option6 ="selected";
										}
										echo  "<select name=bloodGroup>
										  <option value=  'A positive' $option1>A+</option>
										  <option value= 'A Negetive' $option2>A-</option>
										  <option value= 'B positive' $option3>B+</option>
										  <option value= 'B negetive' $option4>B-</option>
										  <option value= 'O positive' $option5>O+</option>
										  <option value= 'O Negetive' $option6>O-</option>
										</select>  
									</td> ";
									?>
								</tr>
									
									<tr><td colspan="4"><hr></td></tr>
									<tr>
										<td>Phone Number:</td>
										<td></td>
										<td><input type="tel" name="mphone" method ="post"  value="<?php echo $row['phone'];?>"></td>
										<td><?php echo $noError;?></td>
										<td><?php echo $numberrError;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td>Date Of Birth:</td>
										<td></td>
										<td><input type ="date" name ="date" method ="post"  value="<?php echo $row['dob'];?>"></td>
										<td><?php echo $dobError;?></td>
									</tr>
									<tr><td colspan="3"><hr></td></tr>
									<tr>
										<td><input type ="submit" value ="Update" name="submit"></td>
										<td></td>
										<td><b><?php echo $Error;?><b></td>
									</tr>
									
								</table>
							</fieldset>
						</td>
					</tr>
					<tr>
						<td class="footer_design"  colspan="2" align="center"><h4>Copyright from @glaxoserfr4.com<h4></td>
					</tr>
			</table>
		</form>	
		</div>
	 </center>
	</body>
</html>