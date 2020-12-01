<?php

 //session_start();
 global $message;
 $id = $_SESSION["userID"];
 $error="";
 $passError="";
 $position = $_SESSION["Position"];


  if (isset($_POST['submit'])) {
	 
 

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Error: " . mysqli_error($conn));



$result1 = mysqli_query($conn, "SELECT * from officeinfo WHERE userId='" . $id."'");
global $row;
$row = mysqli_fetch_array($result1);


 if(isset($mname) || isset($memail) || isset($_POST['gender']) || isset($address) || isset($date) || isset($mphone)){
	 
	 

	if ($position="Admin" || $position ="News Editor" || $posititon ="Journalist") {
		mysqli_query($conn, "UPDATE officeinfo set name='". $name."', email='". $email."',address='". $address."',dob='". $dob."' WHERE userId='". $id ."'");
		$message = "Your Profile Updated Successfully";
		header('Location:../view/editSuccessful.php');
	} 


	else {
		echo $message = "Something went wrong";

	   }
  }

    mysqli_close($conn);
}



  

	

?>