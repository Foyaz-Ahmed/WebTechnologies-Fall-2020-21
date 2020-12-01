<?php
include('findReaderInfo.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$name ="";

$userId;


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT userId, name, email,gender, phone,bloodGroup,dob FROM readerregistrationinfo";
$result = $conn->query($sql);


			 echo "<table border= 1 align=center cellspacing=0>";
			 echo "<tr>";
			 echo "<th width= 200px>User Id</th>";
			 echo "<th width= 200px>Name</th>";
			 echo "<th width= 200px>Email</th>";
			 echo "<th width= 200px>Gender</th>";
			 echo "<th width= 200px>Phone</th>";
			 echo "<th width= 200px>bloodGroup</th>";
			 echo "<th width= 200px>Date Of Birth</th>";
			 echo "</tr>";
			 echo "</table>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  
    //echo "Name----- " . $row["name"]. " ----- Email: " . $row["email"]. "--------Phone " . $row["phone"]. "--------BloodGroup " . $row["boodGroup"]. "--------Date of Birth " . $row["dob"]."<br>";
	$userId = $row["userId"];
	$name = $row["name"];
	$email = $row["email"];
	$gender = $row["gender"];
	$phone = $row["phone"];
	$bloodGroup = $row["bloodGroup"];
	$dob = $row["dob"];
	
	
	
			
	 echo "<table border=1 cellspacing=0 align= center>";
	 echo "<tr>";
	 echo "<td width =200px align= center>".$userId."</td>";
	 echo "<td td width =200px align= center>".$name."</td>";
	 echo "<td td width =200px align= center>".$email."</td>";
	 echo "<td td width =200px align= center>".$gender."</td>";
	 echo "<td td width =200px align= center>".$phone."</td>";
	 echo "<td td width =200px align= center>".$bloodGroup."</td>";
	 echo "<td td width =200px align= center>".$dob."</td>";
	 echo "</tr>";
	 echo "</table>";
			
	
	
  }
} else {
  echo "0 results";
}
$conn->close();
echo "<br> <br> <br>";
include('iud.php');
?>


