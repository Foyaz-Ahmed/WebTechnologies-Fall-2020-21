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

		$headline= $_POST['headline'];
		$details= $_POST['details'];
		include('dashboardCheck.php');
		
		$conobj=$connection->OpenCon();

		$sql = db::updateNewsInfo($conobj,$_POST['catagory'], $headline, $details,$name);
		
		
		if ($sql === TRUE) {
		header('Location:../view/newsInfo.php');
		//echo $_POST['catagory'];
		//echo $headline;
		//echo $details;
	
		
		} else {
		echo "Error updating record: " ;
		}



		$connection->CloseCon($conobj);
	}

}
?>