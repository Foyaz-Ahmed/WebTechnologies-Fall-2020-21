<?php
include('../control/addTypeCheck.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<center>
	<form action="" method="post">
		<table>
			<tr><th>Choose type for Inserting Employee</th></tr>
			<tr>
				<td>
					<fieldset>
						<b>Type:<b> <input type="radio" value="Admin" name="type" />Admin 
						<input type="radio" value="News Editor" name="type" />News Editor 
						<input type="radio" value="Journalist" name="type"/>Journalist <?php echo $error; ?>
					</fieldset>
				</td>
				</tr>
				<tr>
					<td><input type="submit" value="Next" name="submit"/></td>
				</tr>
			
		</table>
	</form>
	</center>
</body>
</html>