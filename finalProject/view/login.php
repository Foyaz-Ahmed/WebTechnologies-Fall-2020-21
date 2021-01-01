<?php
include ('header.php');
include('menubar.php');

include('../control/logincheck.php');

if(isset($_SESSION['userID'])){
header("location: dashboard.php");
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../css/log.css" />
	<script type="text/javascript" src="../js/logvalidated.js"></script>
</head>

<body>
	<br><br>
	<div class="login_page">
		<div class="form">
			<form action="" method="post" class="loginform" onsubmit="logvalidateForm()">
				<img class="picture" src="../images/login.jpg" alt="loginpicture" />
				<h2>Login</h2>
				<input  type="text" name="userID" placeholder="user Id" id="id"/><br>
				<input type="password"  name="password" placeholder="password" id="password" />
				<div class="typedesign">
				<label for="gender"><h3>Type:<h3></label>
				<input  type="radio" name="Position" id="admin" value="Admin"/><b>Admin</b>
				<input  type="radio" name="Position" id="newseditor" value ="News Editor"/><b>News Editor</b>
				<input   type="radio" name="Position" id="journalist" value="Journalist"/><b>Journalist</b>
				<input   type="radio" name="Position" id ="reader" value="Reader"/><b>Reader</b><br>
			</div>
			<?php echo $error;?>;
			<hr>
			<input id="submit" type="submit" name="submit" value="LOGIN" />
			<div class="sign_up">
				<h3>Don't have an account?</h3><a href="registration.php">sign up</a>
			</div>
			
			</form>
		</div>
	</div>
</body>
<?php include('footer.php');?>
</html>