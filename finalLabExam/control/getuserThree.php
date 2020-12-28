<?php
include('db.php');

$email = $_POST['search'];

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByEmail($conobj,"heros",$email);
if ($MyQuery->num_rows > 0) {
echo "<table><tr><th>Id</th><th>Name</th><th>Address</th><th>Email</th><th>password</th><th>Telephone</th><th>superpower</th></tr>";
    
while($row = $MyQuery->fetch_assoc()) {
   echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Email"]."</td><td>".$row["Password"]."</td><td>".$row["Telephone"]."</td><td>".$row["Superpower"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
 

?>

