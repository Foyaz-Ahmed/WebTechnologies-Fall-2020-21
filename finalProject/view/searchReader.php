<?php
session_start();
$position = $_SESSION['Position'];

include('../control/dashboardCheck.php');


?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
		<link rel="stylesheet" href="../css/dashboard.css" />
		
		<link rel="stylesheet" href="../css/profiledesign.css" />
		<script>
	  function showmyuser() {
		  var name = document.getElementById("search").value;

  if(document.getElementById("id").checked == false && document.getElementById("name").checked == false && document.getElementById("phone").checked == false && document.getElementById("email").checked == false)
	
     
	 {
		 if(name=="")
		 {
			 alert("select any option");
			return false;
		 }
		 else{
			 alert("search validate error");
		 }
		  
	 }
	 
	 	if(document.getElementById("id").checked == true){
			 if(name=="")
			{
				alert("empty id field");
				return false;
			}
		else{
			var regId = /^[a-z]+$/
			if(regId.test(name)){
				 alert('Please enter valid id');
				 return false;
			}
		}
	    }
	 
		if(document.getElementById("name").checked == true){
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
	    }
		
		if(document.getElementById("phone").checked == true){
			if(name=="")
			{
				alert("empty phone field");
				return false;
			}
			
			else{
				 
		var regPhone = /^[A-Za-z]+$/;
		
		
		if(name.length<=8 || regPhone.test(name))
		{
			alert("Invalid  Phone Number");
			return false;
		}
		
	}
	    }
		
		if(document.getElementById("email").checked == true){
			
		if(name == "")
		{
		alert("empty email field");

		return false;
	    }
		else{
		
		var regEm = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		if(!regEm.test(name)){
		alert("You have entered an invalid email address!");
		return false;

		}
        }


		}
	  var search =  document.getElementById("search").value;
	   
	  if(document.getElementById("id").checked == true)
	  {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() 
		  {

		  if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("mytext").innerHTML = this.responseText;
			}
		  else
		  {
			document.getElementById("mytext").innerHTML = this.status;
		  }
		  };
		  xhttp.open("POST", "/finalProject/control/getuserOne.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("search="+search);
	  }
	  
	  if(document.getElementById("name").checked == true)
	  {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() 
		  {

		  if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("mytext").innerHTML = this.responseText;
			}
		  else
		  {
			document.getElementById("mytext").innerHTML = this.status;
		  }
		  };
		  xhttp.open("POST", "/finalProject/control/getuserTwo.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("search="+search);
	  }
	   if(document.getElementById("phone").checked == true)
	  {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() 
		  {

		  if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("mytext").innerHTML = this.responseText;
			}
		  else
		  {
			document.getElementById("mytext").innerHTML = this.status;
		  }
		  };
		  xhttp.open("POST", "/finalProject/control/getuserThree.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("search="+search);
	  }
	   if(document.getElementById("email").checked == true)
	  {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() 
		  {

		  if (this.readyState == 4 && this.status == 200) {
			 document.getElementById("mytext").innerHTML = this.responseText;
			
			}
		  else
		  {
			document.getElementById("mytext").innerHTML = this.status;
		  }
		  };
		  xhttp.open("POST", "/finalProject/control/getuserFour.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("search="+search);
	  }
	 
	}
	 
	  </script>
	</head>
	<body>
		<div>
		<center>
		
			<table border="1">	
					</tr>
						<td class="dashboard_head" colspan ="2" width ="100%" height="50px" align="center">
						<h1>
								Welcome to<?php echo " " .$name; ?> in your profile
								
						</h1>
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
							<table class="searchr_wrap">
							<tr>
								<td>
							<input type="text" name="search" id="search" ><button id="buttonsearch" onclick="showmyuser()">Search</button><br><br><br>
	
							<input type ="radio" name ="gender" value ="id" id="id">Search by ID
							<input type ="radio" name ="gender" value ="name" id="name">Search by Name
							<input type ="radio" name ="gender" value ="phone" id="phone">Search by Phone
							<input type ="radio" name ="gender" value ="email" id="email">Search by Email<br><br>
							
							<p id="mytext"></p>
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
		
		</div>
	</body>
</html>
