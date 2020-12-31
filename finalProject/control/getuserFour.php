<?php
include('db.php');

$email = $_POST['search'];

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByEmail($conobj,"readerregistrationinfo",$email);



if ($MyQuery->num_rows > 0) {
    echo "<table border=1 cellspacing=0><tr><th>User Id</th><th>Name</th><th>Email</th><th>Gender</th><th>Phone</th><th>Blood Group</th><th>Date of Birth</th></tr>";

    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["userId"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["phone"]."</td><td>".$row["bloodGroup"]."</td></td><td>".$row["dob"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }