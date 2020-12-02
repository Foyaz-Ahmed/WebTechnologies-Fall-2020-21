<?php

//include ('../control/db.php');
$error="";

$name = $email = $phone =$dob =$address=$dob="";
if(isset($_POST['submit'])){

	if(empty($_POST['mname']) || empty($_POST['memail']) ||  empty($_POST['gender']) || empty($_POST['address']) || empty($_POST['jdate']) || empty($_POST['mphone']) || empty($_POST['bloodGroup']) || empty($_POST['date'])){
		
		
		$error = "Empty Field";
		
		
	}
	else{
		$name= $_POST['mname'];
		$email= $_POST['memail'];
		$phone= $_POST['mphone'];
		$bloodGroup= $_POST['bloodGroup'];
		//$phone= $_POST['mphone'];
		$joiningDate= $_POST['jdate'];
		$address= $_POST['address'];
		$dob= $_POST['date'];
		$connection = new db();
		
		$conobj=$connection->OpenCon();

		$sql = db::updateOfficeInfo($conobj,$ID, $name, $email,$_POST['gender'],$address,$joiningDate, $phone,$_POST['bloodGroup'] ,$dob);
		
		
		if ($sql === TRUE) {
		echo "Record updated successfully";
		header('Location:../view/showOfficeInfo.php');
		} else {
		echo "Error updating record: " ;
		}



		$connection->CloseCon($conobj);
	}

}
?>