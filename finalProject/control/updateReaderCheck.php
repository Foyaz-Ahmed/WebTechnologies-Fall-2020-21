<?php

//include ('../control/db.php');
$error="";

$name = $email = $phone =$dob ="";
if(isset($_POST['submit'])){

	if(empty($_POST['catagory']) || empty($_POST['headline']) || empty($_POST['details'])){
		
		
		$error = "Empty Field";
		echo $error;
		
		
	}
	else{
		$catagory= $_POST['catagory'];
		$headline= $_POST['headline'];
		$details= $_POST['details'];
		
		$conobj=$connection->OpenCon();

		$sql = db::updateNewsInfo($conobj,$catagory, $headline, $details);
		
		
		if ($sql === TRUE) {
		header('Location:../view/newsInfo.php');
		} else {
		echo "Error updating record: " ;
		}



		$connection->CloseCon($conobj);
	}

}
?>