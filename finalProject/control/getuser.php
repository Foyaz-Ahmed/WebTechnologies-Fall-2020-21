<?php
include('db.php');

$user = $_POST['uname'];


if($user=="")
{
    echo "0 results";
}

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"officeinfo",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table border=1 cellspacing=0><tr><th>Id</th><th>Name</th><th>Email</th><th>Gender</th><th>Address</th><th>Joining Date</th><th>Phone</th><th>Blood Group</th><th>Date of Birth</th></tr>";

    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["userId"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["address"]."</td><td>".$row["joiningDate"]."</td><td>".$row["phone"]."</td><td>".$row["bloodGroup"]."</td></td><td>".$row["dob"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }