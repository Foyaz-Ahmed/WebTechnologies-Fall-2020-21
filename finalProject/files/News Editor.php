<?php
	include('control/check.php');

	if(isset($_SESSION['name'])|| isset($_SESSION['email']) || isset( $_SESSION['password']) || isset($_SESSION['cpassword']) || isset($_SESSION['number']) || isset($_SESSION['gender']) || isset($_SESSION['bdate']) || isset($_SESSION['date']))
	{
	header("location: result.php");
	}
?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = $email = $uname = $password = $cpassword = $gender = $bdate = "";
$nameError = $emailError = $numberrError = $passwordError = $cpasswordError = $genderError = $bdateError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = $_POST["name"];
  if (empty($name))
  {
    $nameError = "Please Enter Your Name";
  }

  $email = $_POST["email"];
  if (empty($email))
  {
    $emailError = "Please Enter Your Email";
  }

  $password = $_POST["password"];
  if (empty($password))
  {
    $passwordError = "Please Enter Your Password";
  }

  $cpassword = $_POST["cpassword"];
  if ($cpassword != $password)
  {
    $password = "";
    $cpasswordError = "Please Enter The Same Password";
  }
  else if (empty($cpassword))
  {
    $cpasswordError = "Please Enter Confirm Password";
  }

  $number = $_POST["number"];
  if (empty($number))
  {
    $numberrError = "Please Enter Your Phone Number";
  }
  else if (!is_numeric($number))
  {
    $number = "";
    $numberrError = "Please Enter Valid Number";
  }

  $gender = $_POST["gender"];
  if (empty($gender))
  {
    $genderError = "Please Enter Your Gender";
  }

  $bdate = $_POST["bdate"];
  if (empty($bdate))
  {
    $bdateError = "Please Enter Your Birth Date";
  }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<fieldset style="width:40%">
<legend>News Editor</legend><br>

<table>

<tr><td> Name: <td> <input type="text" name="name"> <td> 
<?php 
echo $nameError; 
?> </td></tr> 
<tr><td> </td></tr>

<tr><td> Email: <td> <input type="email" name="email" > <td> 
<?php
echo $emailError; 
?> </td></tr>
<tr><td> </td></tr>

<tr><td> Password: <td> <input type="password" name="password" > <td> 
<?php 
echo $passwordError; 
?> </td></tr>
<tr><td> </td></tr>

<tr><td> Confirm Password: <td> <input type="password" name="cpassword" > <td> 
<?php 
echo $cpasswordError; 
?> </td></tr>
<tr><td> </td></tr>

<tr><td> Phone Number: <td> <input type="text" name="number" > <td> 
<?php 
echo $numberrError; 
?> </td></tr>
<tr><td> </td></tr>

<tr><td> Gender: <td> 
<input type="radio" name="gender" value="Male" > Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio" name="gender" value="Other"> Other <td> 
<?php 
echo $genderError; 
?> </td></tr>
<tr><td> </td></tr>

<tr><td> Birth Date: <td> 
<input type="date" name="bdate"> (mm/dd/yyyy) <td> 
<?php 
echo $bdateError; 
?> </td></tr>
<tr><td> </td></tr>


</table><br>
<input type="submit" value="Submit">
<input type="reset" value="Reset"><br>  
</fieldset>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $bdate;
echo "<br>";
echo $gender;
echo "<br>";
echo $number="";
?>

</body>
</html>