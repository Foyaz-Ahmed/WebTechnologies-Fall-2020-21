<?php
session_start();
if(isset($_SESSION['id']))

{
	header('Location:teacher_home.php');
}
?>

<html>
<head></head>

<body>
	

<center>
<form method="post" action="../php/loginCheck.php">
	<table border="0" cellspacing="0" cellpadding="0" width="30%" >
		<tr >
			<td >
				<fieldset >
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="id"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br /><hr/>
					<input type="submit" value="Login" name="submit">
					<a href="registration.php">Register</a><br>
					<a href="forgotPassword.php">Forgot Password</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>