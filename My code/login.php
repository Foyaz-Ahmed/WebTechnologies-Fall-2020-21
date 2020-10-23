
background-image: url('1.png');

<html>
    
	<head>
		<title>News Portal Management System</title>
		<style>
			form{
				width :500px;
				height :300px;
				border : 1px solid red;
				text-align : center;
				margin-top : 100px;
				margin-left: 400px;
				background-color: 33FFDD;
			}
			input{
				
				margin-top:40px;
				margin-right:20px
			}
			label{
				font-weight: bold;
			}
			h1{
				margin-left:400px;
				width:500px;
				margin-top:100px;
				color:#ffdc33;
				background-color:#2E86C1;
			}
		</style>
	</head>
	

	<body>
		<h1 align ="center">News Portal Management System</h1>
			<form action ="projectfolder/Projectform.php" align ="center">
				<label for ="text">User Name:</label>
				<input type ="text"><br>
				<br><hr>
				<label for ="pass">Password:</label>
				<input type="password"><br>
				<br><hr>
				<td><input type ="submit" value ="Submit" style="font-weight:bold;"></td>
				<td><input type ="reset"  value ="Reset" style="font-weight:bold;"></td>
				<a href="register.php"><h5 align ="center">For Registration Click here </h5></a>
			</form>
	</body>	
</html>