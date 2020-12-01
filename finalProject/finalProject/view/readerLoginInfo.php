<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$userId;


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT userId, password, position FROM readerlogin";
$result = $conn->query($sql);

			 echo "<h3 align=center>LOG IN INFORMATION TABLE:</h3>";
			 echo "<table border= 1 align=center>";
			 echo "<tr>";
			 echo "<th width= 200px>User Id</th>";
			 echo "<th width= 200px>Password</th>";
			 echo "<th width= 200px>Position</th>";
			 echo "</tr>";
			 echo "</table>";


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	  
    //echo "UserId: " . $row["userId"]. " ----- Password: " . $row["password"]. "--------Possition " . $row["position"]. "<br>";
			$userId = $row["userId"];
			$password =$row["password"];
			$position =$row["position"];
			
     echo "<table border=1 cellspacing=0 align= center>";
	 echo "<tr>";
	 echo "<td width =200px align= center>".$userId."</td>";
	 echo "<td td width =200px align= center>".$password."</td>";
	 echo "<td td width =200px align= center>".$position."</td>";
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

