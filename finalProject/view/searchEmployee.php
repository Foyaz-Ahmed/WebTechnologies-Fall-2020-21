<?php
session_start();
include('../control/dashboardCheck.php');
$position = $_SESSION['Position'];




?>


<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
		<link rel="stylesheet" href="../css/officeInfo.css" />
		<link rel="stylesheet" href="../css/profiledesign.css" />
		 <script>
			function showmyuser() {
			var name = document.getElementById("uname").value;
			 if(name=="")
			{
				alert("empty name field");
				return false;
			}
		else{
			var regName = /^[A-Za-z]+ [A-Za-z]+$/;
			if(!regName.test(name)){
				 alert('Please enter valid name');
				 return false;
			}
		}
	    
			var uname=  document.getElementById("uname").value;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {

			if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("mytext").innerHTML = this.responseText;
			}
			else
			{
				 document.getElementById("mytext").innerHTML = this.status;
			}
		  };
		  xhttp.open("POST", "/finalProject/control/getuser.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("uname="+uname);
			}
		</script>
	</head>
	<body>
		<div>
		<center>
			<table border="1" cellspacing="0">	
					</tr>
						<td class="dashboard_head" colspan ="2" width ="100%" height="50px" align="center">
						<h1>
								Welcome to<?php echo " " .$name; ?> in your profile
								
						</h1>
						</td>
					</tr>
					</tr>
						<td class="side_content" height ="400"><b align="left"><h1>Account</h1></b>
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
								echo "<li><a href= searchEmployee.php><h3>Search Employee by Name</h3></a></li>";
								echo "<li><a href= searchReader.php><h3>Search Reader by Name</h3></a></li>";
								}?>
								<?php if($position=="News Editor" || $position=="Admin"){
								echo "<li><a href= manageNews.php><h3>Manage News </h3></a></li>";
								}?>
								
								<li><a href="../control/logout.php"><h3>Logout</h3></a></li>
								
							</ul>
						</td>
						<td width ="1200px" height ="700px">
							
								
								<table class="search_wrap" align="center">
									<tr>
										<td>Search:</td>
										<td><input type ="text" id="uname" method ="post" ></td>
										<td><button onclick="showmyuser()">Search</button></td>
									<tr>
										<td colspan="3"><hr></td>
			
									</tr>
									<tr>
											<td></td>
											<td></td>
											<td><p id="mytext"></p></td>
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
	</body>
</html>