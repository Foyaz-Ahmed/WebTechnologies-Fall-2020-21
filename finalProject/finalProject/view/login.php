<?php
include('header.php');
include('../control/logincheck.php');

if(isset($_SESSION['userID'])){
header("location: dashboard.php");
}
?>


<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>News Portal Management System</title>
	</head>
	<body>
		<div>
			<table border="1" cellspacing="0">
				<tr>
					<td width="1800px" height="500px">
						<form action="" method="post">
								<fieldset>
								<legend>LOGIN</legend>
									<table align="center">
										<tr>
											<td height="50px"  ><b>User ID:</b></td>
											<td><input type="text" name="userID" placeholder="user ID"/></td>
										</tr>
										<tr>
											<td height="100px"><b>Password:</b></td>
											<td><input type="Password" name="password" placeholder="password" /></td>
										</tr>
										<tr>
											<td><b>Choose Option:</b></td>
											
											<td><input type="radio" name="Position" value="Admin"/>Admin</td>
											<td><input type="radio" name="Position" value ="News Editor" />News Editor</td>
											<td><input type="radio" name="Position" value="Journalist" />Journalist</td>
											<td><input type="radio" name="Position" value="Reader" />Reader</td>
										</tr>
										<tr>
											<td colspan="2">
												<?php 
													
													echo $error;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="2"><hr></td>
										</tr>
										<tr>
										<td></td>
											<td><input type="submit" name="submit"  value="LOGIN" />
											<a href="forgotPassword.php">Forgot Password?</a>
											</td>
										</tr>
									</table>
								</fieldset>
							</form>
					</td>	
				</tr>
			</table>
			<?php include('footer.php');?>
		</div>
					
			
	</body>
</html>