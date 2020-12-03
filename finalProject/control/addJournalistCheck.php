<?php
include('db.php');

		  
 $error="";
 $matchPass="";
if (isset($_POST['submit'])) {
		  
if (empty($_POST['mname']) || empty($_POST['userId'])|| empty($_POST['address']) || empty($_POST['jdate'])||    empty($_POST['memail'])|| empty( $_POST['mpassword']) || empty($_POST['mcpassword']) || empty($_POST['gender']) || empty($_POST['mphone']) || empty($_POST['bloodgroup']) || empty($_POST['date']) || empty($_POST['userId'])){
$error = "Fill up All the Field For Successfull Registration";
 
}

  
  else
{
		 $name = $_POST["mname"];
		 $userId = $_POST["userId"];
		 $address = $_POST["address"];
		 $jdate = $_POST["jdate"];
		 $email = $_POST["memail"];
		 $pass = $_POST["mpassword"];
		 $cPass = $_POST["mcpassword"];
		 $phone = $_POST["mphone"];
		 $myGender = $_POST["gender"];
		 $bGroup = $_POST["bloodgroup"];
		 $dob = $_POST["date"];
		 
		 if($pass === $cPass)
		 {		 
		
		$connection = new db();
		$conobj=$connection->OpenCon();


		$qrr = db::InfoTable($conobj,$userId,$name,$email,$myGender,$address,$jdate, $phone, $bGroup,$dob);
		$sll =  db::insertloginTableJournalist($conobj,$userId, $pass, "Journalist");
		
		
		$re =$conobj->query($qrr);
		$se =$conobj->query($sll);
		
		header('Location:../view/showOfficeInfo.php');

		 }
		
 }
     
		}
		?>