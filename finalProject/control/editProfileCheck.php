<?php

 //session_start();
 
 $id = $_SESSION["userID"];
 //echo $position;
 $error="";
 $passError="";
 $position = $_SESSION["Position"];


  if (isset($_POST['submit'])) {
	 
 
 if(empty($mname) || empty($memail) || empty($_POST['gender']) || empty($address) || empty(bloodGroup) || empty($date) || empty($mphone)){
	 
	 echo "All field are empty";
	 
 }
 
 else{

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Error: " . mysqli_error($conn));


$result = mysqli_query($conn, "SELECT * from readerlogin WHERE userId='" . $id."'");
$result1 = mysqli_query($conn, "SELECT * from officelogin WHERE userId='" . $id."'");

$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result1);



if ($position="Reader") {
	mysqli_query($conn, "UPDATE readerlogin set password='". $cpass."' WHERE userId='". $id ."'");
	$message = "Password is Changed Successfully";
}



else if ($position="Admin" || $position ="News Editor" || $posititon ="Journalist") {
	mysqli_query($conn, "UPDATE officelogin set name='". $name."', email='". $email."',gender='". $_POST['gender']."',address='". $address."',bloodGroup='". $bloodGroup."',dob='". $dob."' WHERE userId='". $id ."'");
	$message = "Your Profile Updated Successfully";
} 


else {
	echo $message = "Something went wrong";

   }


    mysqli_close($conn);
}



  }

	

?>