<?php

 $pass =$cpass = $rpass = $message = "";
 $id = $_SESSION["userID"];
 $error="";
 $passError="";
 $position = $_SESSION["Position"];


 if (isset($_POST['submit'])) {
	 
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$rpass = $_POST['rpass'];
	
	
	 
	
	 
    
	if (empty($_POST['pass']) || empty($_POST['cpass']) || empty($_POST['rpass'])) {
       
			$error ="Empty field";
			
	
	}
	


	
else {	
 $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];
  $rpass = $_POST['rpass'];   
	

 $conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Error: " . mysqli_error($conn));


$result = mysqli_query($conn, "SELECT * from readerlogin WHERE userId='" . $id."'");
$result1 = mysqli_query($conn, "SELECT * from officelogin WHERE userId='" . $id."'");

$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result1);

if ($pass == $row["password"] && $cpass == $rpass && $position="Reader") {
	mysqli_query($conn, "UPDATE readerlogin set password='". $cpass."' WHERE userId='". $id ."'");
	$message = "Password is Changed Successfully";
}



else if ($pass == $row1["password"] && $cpass == $rpass && $position="Admin" || $position ="News Editor" || $posititon ="Journalist") {
	mysqli_query($conn, "UPDATE officelogin set password='". $cpass."' WHERE userId='". $id ."'");
	$message = "Password is Changed Successfully";
} 


else {
	$message = "Password doesnot match";

   }


    mysqli_close($conn);
}

}

 

	

?>