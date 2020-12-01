<?php

//include ('../control/db.php');
$error="";

$name = $email = $phone =$dob ="";
if(isset($_POST['submit'])){

	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['dob'])){
		
		
		$error = "Empty Field";
		
		
	}
	else{
		$name= $_POST['name'];
		$email= $_POST['email'];
		$phone= $_POST['phone'];
		$dob= $_POST['dob'];
		$connection = new db();
		
		$conobj=$connection->OpenCon();

		$sql = db::updateReaderInfo($conobj,$ID, $name, $email, $phone, $dob);
		
		
		if ($sql === TRUE) {
		echo "Record updated successfully";
		} else {
		echo "Error updating record: " ;
		}



		$connection->CloseCon($conobj);
	}

}
?>