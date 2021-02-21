<?php
include('db.php');
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$connection = new db();
$conobj=$connection->OpenCon();
$catagory = $obj->writer;
$stmt=$connection->sportsNews($conobj,"newsdetails",$catagory);


if ($stmt->num_rows > 0) {
    echo "<table border=1 cellspacing=0><tr><th>News Catagory</th><th>News Headlines</th><th>News Details</th><th>Writer Name</th></tr>";

    while($row = $stmt->fetch_assoc()) {
      echo "<tr><td>".$row["newscategory"]."</td><td>".$row["newsheadline"]."</td><td>".$row["newsbody"]."</td><td>".$row["writerName"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>