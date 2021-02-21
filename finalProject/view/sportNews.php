<?php
include('header.php');
include('menubar.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript">
		obj = { "writer":"Sports"};
		dbParam = JSON.stringify(obj);
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		  if (this.readyState == 4 && this.status == 200) {
			document.getElementById("demo").innerHTML = this.responseText;
		  }
		};
		xmlhttp.open("GET", "/finalProject/control/getsports.php?x=" + dbParam, true);
		xmlhttp.send();
	 </script>
</head>
<body>
	
	
	<p id="demo"><p>

	
</body>
</html>