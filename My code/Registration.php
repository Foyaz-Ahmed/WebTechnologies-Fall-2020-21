<!DOCTYPE html>
<html>
<head>
 <title>Registration Form</title>
 <style>
 form 
  {
  border:2px solid black;
  width:400px;
  height:550px;
  text-align: center;
  }
 input{
	    
      }
 </style>
</head>
</head>
<body >
	
	<form action ="loginaction/result.php" >
		<br><br><br>
	    <label for ="name">Name :</label>
		<input type ="text" width="10" height = "15"><br>
		<br><hr>
		<label for ="mail">Email :</label>
		<input type = "text"><br>
		<br><hr>
		<label for ="text">User Name :</label>
		<input type ="tex"><br>
		<br><hr>
		<label for ="pass">Password :</label>
		<input type="password"><br>
		<br><hr>
		<label for ="name">Confirm Password :</label>
		<input type = "Password"><br>
		<br><hr>
		<label for="gender">Gender</label><br><br>
		<input type = "radio" id ="r1" name = "gender" > 
		<label for ="male">Male</label>
		<input type = "radio"  id ="r2" name = "gender" > 
		<label for="female">Female</label>
		<input type = "radio"  id ="r2" name = "gender" > 
		<label for="female">Other</label><br>
		<br><hr>
		<label for ="name">Date of Birth         :</label>
		<input type= "date"><br>
		<br><hr>
		<input type="submit" value="Submit">
		<input type="reset" value ="Reset">
		
	</form>
	
</body>
</html>