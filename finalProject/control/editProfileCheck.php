<?php
 
 include('db.php');

 global $message;
 $id = $_SESSION["userID"];
 $error="";
 $Error="";
 $position = $_SESSION["Position"];
 $connection = new db();
 $conobj=$connection->OpenCon();

$sql = db::checkOwnProfile($conobj,$id);


global $row;
$row = mysqli_fetch_array($sql);
//echo $row['gender'];


  if (isset($_POST['submit'])) {
	  
	  
	  
	  
	  
	  
if(empty($_POST['mname']) || empty($_POST['memail']) ||  empty($_POST['gender']) || empty($_POST['mphone']) || empty($_POST['address']) || empty($_POST['date']))
	
	{
	 
	 $Error="fields  are empty";
 
	}
	






else{
	 

	if ($position="Admin" || $position ="News Editor" || $posititon ="Journalist") {
		
		$name = $_POST['mname'];
		$email = $_POST['memail'];
		$address = $_POST['address'];
		$phone = $_POST['mphone'];
		$dob = $_POST['date'];
		$sql = db::updateOwnProfile($conobj,$id,$name,$email, $_POST['gender'],$address,$phone,$dob);
		
		
		if ($sql === TRUE) {
		echo "Record updated successfully";
		} else {
		echo "Error updating record: " ;
		}

	} 
   
}


  }
  

	

?>