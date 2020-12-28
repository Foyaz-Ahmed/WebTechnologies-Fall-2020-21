<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "person";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }


 function GetUserById($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$uname'");
 return $result;
 }
 function GetUserByName($conn,$table, $name)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Name='$name'");
 return $result;
 }
 function GetUserByPhone($conn,$table, $phone)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Telephone='$phone'");
 return $result;
 }
 function GetUserByEmail($conn,$table, $email)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Email='$email'");
 return $result;
 }
function CloseCon($conn)
 {
 $conn ->close();
 }
}
?>