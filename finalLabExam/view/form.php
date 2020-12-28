<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="../js/validated.js"></script> 
	 <script>
	  function showmyuser() {
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
		  xhttp.open("POST", "/person/control/getuser.php", true);
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
		  xhttp.open("POST", "/person/control/getuserOne.php", true);
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
		  xhttp.open("POST", "/person/control/getuserTwo.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("search="+search);
	  }
	   if(document.getElementById("email").checked == true)
	  {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() 
		  {

		  if (this.readyState == 4 && this.status == 200) {
			 // document.getElementById("mytext").innerHTML = this.responseText;
			 alert(this.response.Text);
			}
		  else
		  {
			document.getElementById("mytext").innerHTML = this.status;
		  }
		  };
		  xhttp.open("POST", "/person/control/getuserThree.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("search="+search);
	  }
	 
	}
	 
	  </script>
</head>
<body>
<form action="" onsubmit="return validateForm()" method="post">
	<input type="text" name="search" id="search"> <!--onkeyup="showmyuser()"--><br><br>
	
	<input type ="radio" name ="gender" value ="id" id="id">Search by ID
	<input type ="radio" name ="gender" value ="name" id="name">Search by Name
	<input type ="radio" name ="gender" value ="phone" id="phone">Search by Phone
	<input type ="radio" name ="gender" value ="email" id="email">Search by Email<br><br><br><br>
	<button onclick="showmyuser()">Search</button>
	<p id="mytext"></p>
	<form>
</body>
</html>