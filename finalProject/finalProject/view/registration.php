<?php

include ('header.php');


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div>
		<form action="">
			<fieldset>
				<table align="center" height="500px">
					<tr>
						<td><img width ="200px" height ="150px" src="../images/readerreg.png" alt="readerRegistraion" /></td>
						<td></td>
						<td></td>
						<td></td>
						<td><img width ="200px" height ="150px" src="../images/officereg.jpg" alt="adminRegistraion" /></td>
						<td><img width ="200px" height ="150px" src="../images/journalist.png" alt="JournalistRegistraion" /></td>
						<td><img width ="200px" height ="150px" src="../images/newseditor.jpg" alt="newsEditorRegistraion" /></td>
					</tr>
					
					<tr>
						<td align="center"><a href="register.php"><b>User Registration</b></a></td>
						<td></td>
						<td></td>
						<td></td>
						<td align ="center"><a href="adminForm.php"><b>Admin Registration</a></b></td>

						<td align ="center"><a href="journalistForm.php"><b>Journalist Registration</a></b></td>
						
						<td align ="center"><a href="newsEditorForm.php"><b>News Editor Registration</a></b></td>
						
					</tr>
					
					
				</table>
			</fieldset>
			<?php include ('footer.php');?>
		</form>
	</div>
</body>
</html>