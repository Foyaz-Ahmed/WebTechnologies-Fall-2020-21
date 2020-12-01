<?php


 global $message;
 $id = $_SESSION["userID"];
 $error="";
 $Error="";
 $position = $_SESSION["Position"];
 
$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Error: " . mysqli_error($conn)); 
$result = mysqli_query($conn, "SELECT * from officeinfo WHERE userId='" . $id."'");
global $row;
$row = mysqli_fetch_array($result);


  if (isset($_POST['submit'])) {
	  
	  
	  
	  
	  
	  
if(empty($_POST['mname']) || empty($_POST['memail']) || empty($_POST['mphone']) || empty($_POST['address']) || empty($_POST['date']))
	
	{
	 
	 $Error="fields  are empty";
 
	}
	
else{
	







	 

	if ($position="Admin" || $position ="News Editor" || $posititon ="Journalist") {
		mysqli_query($conn, "UPDATE officeinfo set name='". $name."', email='". $email."',address='". $address."',dob='". $dob."' WHERE userId='". $id ."'");
		$message = "Your Profile Updated Successfully";
		header('Location:../view/editSuccessful.php');
	} 


	else {
		echo $message = "Something went wrong";

	   }
  

    mysqli_close($conn);
}


  }
  

	

?>