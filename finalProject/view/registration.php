<?php

include ('header.php');
include ('menubar.php');


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>News Portal Management System</title>
	<link rel="stylesheet" href="../css/menubar.css" />
</head>
<body>
	<div class="registration_wrapper">
		<form action="">
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
						<td align="center"><a id="userform" href="register.php"><b>User Registration</b></a></td>
						<td></td>
						<td></td>
						<td></td>
						<td align ="center"><a id="adminform"  href="adminForm.php"><b>Admin Registration</a></b></td>

						<td align ="center"><a id="journalistform" href="journalistForm.php"><b>Journalist Registration</a></b></td>
						
						<td align ="center"><a id="newsEditorform" href="newsEditorForm.php"><b>News Editor Registration</a></b></td>
						
					</tr>
					
					
				</table>
			</form>
		</div>
			<?php include ('footer.php');?>
		
	
</body>
</html>