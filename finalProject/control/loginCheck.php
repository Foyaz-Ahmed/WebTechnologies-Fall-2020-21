<?php
include('db.php');

session_start(); 

$error="";

if (isset($_POST['submit'])) {
	if (empty($_POST['userID']) || empty($_POST['password']) || empty($_POST['Position'])) {
$error = "<b>Empty field Please give user Id & password</b>";

	}
	else 
	{
		
		$userId = $_POST['userID'];
		$password= $_POST['password'];
		$position = $_POST['Position'];
		
		 $cookie_name = "user";
		 $cookie_value= $userId;
		
			   
		$connection = new db();
		$conobj=$connection->OpenCon();

        if($position=="Admin" || $position =="News Editor" || $position =="Journalist"){
			
		$userOfficeQuery =  db::CheckOfficeUser($conobj,"officelogin",$userId,$password, $position);


			if ($userOfficeQuery->num_rows > 0) {
			$_SESSION["userID"] = $userId;
			$_SESSION["password"] = $password;
			$_SESSION["Position"] = $position;
			setcookie("userId" , $cookie_value, time() + (86400 * 30), "/"); 
			
	
			   }
			else {
			      $error = "<b>User ID or Password or Position is invalid</b>";

				  }
			   
			}
			 
				
		else{
			        $userReaderQuery =  db::CheckReaderUser($conobj,"readerlogin",$userId,$password, $position);
					
					if ($userReaderQuery->num_rows > 0) {
					$_SESSION["userID"] = $userId;
					$_SESSION["password"] = $password;
					$_SESSION["Position"] = $position;
					   }
					 else {
					$error = "<b>User ID or Password or Position is invalid</b>";

						  }
					

					
				}
		$connection->CloseCon($conobj);
	}		
			


}




?>