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
 
function InfoTable($conn,$userId, $name,$email,$gender,$address,$joiningDate,$phone,$bloodGroup,$dob,$image)
 
 {
	$flag=1;
	$stmt = $conn->prepare("INSERT INTO officeinfo (userId, name, email, gender,address, joiningDate,phone,bloodGroup,dob,image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


	$stmt->bind_param("ssssssssss", $userId, $name, $email, $gender, $address, $joiningDate, $phone, $bloodGroup,$dob,$image);

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
 function updateOwnProfile($conn,$id,$name,$email,$gender,$address,$joiningDate,$phone,$bloodGroup,$dob)
 
 {
	$sql = $conn->query( "UPDATE officeinfo set name='". $name."', email='". $email."',gender='". $gender."',address='". $address."', joiningDate='". $joiningDate."', phone='". $phone."', bloodGroup='". $bloodGroup."',dob='". $dob."' WHERE userId='". $id ."'"); 
	return $sql;
 }
 function OfficeProfileEdit($conn, $ID)
 
 {
	 $sql = "SELECT * FROM officeinfo where userId = '" . $ID."'";
	 return $sql;
 }
 
 function deleteOfficeInfo($conn,$id)
 
 {
	 $sql = $conn->query("DELETE FROM officeinfo WHERE userId= '".$id."'");
	 return $sql;

 }
 function deleteOfficeLoginInfo($conn,$id)
 
 {
	 $sql1 = $conn->query("DELETE FROM officelogin WHERE userId= '".$id."'");
	 return $sql1;

 }
  function deleteReaderInfo($conn,$id)
 
 {
	 $sql = $conn->query("DELETE FROM readerregistrationinfo WHERE userId= '".$id."'");
	 return $sql;

 }
 function deleteReaderLoginInfo($conn,$id)
 
 {
	 $sql1 = $conn->query("DELETE FROM readerlogin WHERE userId= '".$id."'");
	 return $sql1;

 }
 function GetUserByUname($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE name='$uname'");
 return $result;
 }
 
function postNews($conn,$catagory, $headline, $details, $name)
 
 {
	$flag=1;
	$stmt = $conn->prepare("INSERT INTO newsdetails (newscategory,newsheadline,newsbody,writername) VALUES (?, ?, ?, ?)");


	$stmt->bind_param("ssss", $catagory, $headline, $details, $name);

	$stmt->execute();
	$stmt->close();

	return $flag;
 }
 
 function updateNewsInfo($conn,$catagory,$headline,$details,$name)
 
 {
	$sql = $conn->query( "UPDATE newsdetails set newscategory='". $catagory."', newsheadline='". $headline."',newsbody='". $details."' WHERE writerName='". $name."'"); 
	return $sql;
 }
 
 function  deleteNewsInfo($conn,$id)
 
 {
	 $sql = $conn->query("DELETE FROM newsdetails WHERE newscategory = '".$id."'");
	 return $sql;

 }
 function GetUserById($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE userId='$uname'");
 return $result;
 }
 function GetUserByName($conn,$table, $name)
 {
$result = $conn->query("SELECT * FROM  $table WHERE name='$name'");
 return $result;
 }
 function GetUserByPhone($conn,$table, $phone)
 {
$result = $conn->query("SELECT * FROM  $table WHERE phone='$phone'");
 return $result;
 }
 function GetUserByEmail($conn,$table, $email)
 {
$result = $conn->query("SELECT * FROM  $table WHERE email='$email'");
 return $result;
 }
 function sportsNews($conn,$table, $catagory)
 {
	 
$result = $conn->query("SELECT * FROM  $table WHERE newscategory ='$catagory'");
 return $result;
 }
 
 function CloseCon($conn)
 {
 $conn -> close();
 }

 }
?>

