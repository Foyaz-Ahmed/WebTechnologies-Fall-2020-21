<!DOCTYPE html>
<html>

 <head>
	<title>News Portal Management System</title>
	<style>	
		form 
		  {
		  border:1px solid black;
		  width:600px;
		  
		  }
	</style>	
 </head>
 
 <body>
 
	<h5>Fill up the Registration Form:</h5>
	<form action = "projectfolder/loginresult.php">
		<table align ="center" width ="500px" height ="400px">
			<tr>
				<td>Name:</td>
				<td><input type ="text"></td>
				<td></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type ="email"></td>
				<td></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type ="password">
				<td></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type ="password" width="10" height = "15">
				<td></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type ="radio" name ="gender">Male</td>
				<td><input type ="radio" name ="gender">Female</td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type ="tel"></td>
				<td></td>
			</tr>
			<tr border ="1px">
				<td>Date Of Birth:</td>
				<td><input type ="date"></td>
				<td></td>
			</tr>
				<td></td>
				<td><input type ="submit" value ="Submit"></td>
				<td><input type ="reset"  value ="Reset"></td>
			
		</table>
    </form>		
 </body>

</html>