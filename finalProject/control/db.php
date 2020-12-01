<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydB";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 
  function CheckOfficeUser($conn,$table, $userId, $password, $position)
 {
$sql = $conn->query("SELECT * FROM ". $table." WHERE userid ='". $userId."' AND password='". $password."' AND  position ='". $position."'");
 return $sql;
 }
 
  function CheckReaderUser($conn,$table, $userId, $password, $position)
 {
$sql = $conn->query("SELECT * FROM ". $table." WHERE userid ='". $userId."' AND password='". $password."' AND  position ='". $position."'");
 return $sql;
 }
 
 
 function UserInfoTable($conn, $userId,$name,$email,$gender,$phone,$bloodGroup,$dob)
 
{
$flag=1;

$stmt = $conn->prepare("INSERT INTO readerregistrationinfo (userId, name, email, gender,phone,bloodGroup,dob) VALUES (?, ?, ?, ?, ?, ?, ?)");


$stmt->bind_param("sssssss", $userId, $name, $email, $gender, $phone, $bloodGroup,$dob);

$stmt->execute();
$stmt->close();

return $flag;
 }
 
  function InfoTable($conn,$userId, $name,$email,$gender,$address,$joiningDate,$phone,$bloodGroup,$dob)
 
 {
	$flag=1;
	$stmt = $conn->prepare("INSERT INTO officeinfo (userId, name, email, gender,address, joiningDate,phone,bloodGroup,dob) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");


	$stmt->bind_param("sssssssss", $userId, $name, $email, $gender, $address, $joiningDate, $phone, $bloodGroup,$dob);

	$stmt->execute();
	$stmt->close();

	return $flag;
 }
 
 
  function insertloginTableJournalist($conn, $userId, $password, $position)
 
 {
	$flag=1;

	$stmt = $conn->prepare("INSERT INTO officelogin (userId, password, position) VALUES (?, ?, ?)");


	$stmt->bind_param("sss", $userId, $password, $position);

	$stmt->execute();
	$stmt->close();

	return $flag;
 }
 
 function ShowInfoEmployees($conn,$table,$userId)//, $name,$email,$gender,$address,$joiningDate,$phone,$bloodGroup,$dob)
 {
$sql = $conn->query("SELECT * FROM ". $table." WHERE userid ='". $userId."' ");
 return $sql;
 }
 
 function insertReader($conn,$userId, $password,$position){
	 
$flag=1;

$stmt = $conn->prepare("INSERT INTO readerlogin (userId, password, position) VALUES (?, ?, ?)");


$stmt->bind_param("sss", $userId, $password, $position);

$stmt->execute();
$stmt->close();

return $flag;


 }
 function updateReaderInfo($conn,$id, $name, $email, $phone, $dob)
 {
	 
	$sql = $conn->query( "UPDATE readerregistrationinfo set name='". $name."', email='". $email."', phone='". $phone."',dob='". $dob."' WHERE userId='". $id ."'");
	
	 return $sql;
	 
 }
 
 function CloseCon($conn)
 {
 $conn -> close();
 }

 }
?>

