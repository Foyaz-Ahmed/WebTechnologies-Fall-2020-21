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
 
 function ShowInfoEmployees($conn,$table,$userId)
 {
$sql = $conn->query("SELECT * FROM ". $table." WHERE userId ='". $userId."' ");
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
 
 function updateOfficeInfo($conn,$id, $name, $email,$gender,$address,$joiningDate, $phone, $bloodGroup,$dob)
 {
	 
	$sql = $conn->query( "UPDATE officeinfo set name='". $name."', email='". $email."',gender='". $gender."',address='". $address."',joiningDate='". $joiningDate."', phone='". $phone."', bloodGroup='". $bloodGroup."',dob='". $dob."' WHERE userId='". $id ."'");
	
	 return $sql;
	 
 }
 
 function checkOwnProfile($conn,$id)
 
 {
	 $result = $conn->query("SELECT * from officeinfo WHERE userId='" . $id."'");
	 return $result;
 }
 function updateOwnProfile($conn,$id,$name,$email,$gender,$address,$phone,$dob)
 
 {
	$sql = $conn->query( "UPDATE officeinfo set name='". $name."', email='". $email."',gender='". $gender."',address='". $address."', phone='". $phone."',dob='". $dob."' WHERE userId='". $id ."'"); 
	return $sql;
 }
 function OfficeProfileEdit($conn, $ID)
 
 {
	 $sql = "SELECT * FROM officeinfo where userId = '" . $ID."'";
	 return $sql;
 }
 
 function CloseCon($conn)
 {
 $conn -> close();
 }

 }
?>

