 <?php

session_start();

$id = $_SESSION["userID"];
$position = $_SESSION["Position"];
$error="";
//echo $position;


$name = $email = $gender = $address = $joiningDate = $phone = $bloodGroup = $dob = "";
 
$connect = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Error: " . mysqli_error($conn));

if($position == "Admin" || $position == "News Editor" || $position =="Journalist"){   

   
   
    

    $query = "SELECT * FROM `officeinfo` WHERE `userId` = '$id'";
    
    $result = mysqli_query($connect, $query);
    
   
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
         $name = $row['name'];
         $email = $row['email'];
         $gender = $row['gender'];
         $address = $row['address'];
         $joiningDate = $row['joiningDate'];
         $phone = $row['phone'];
         $bloodGroup = $row['bloodGroup'];
         $dob = $row['dob'];
		
      }  
    }
	
   }
    
	else if($position="Reader"){
		
	$connect = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Error: " . mysqli_error($conn));
    

    $query = "SELECT * FROM `readerregistrationinfo` WHERE `userId` = '$id'";
    
    $result = mysqli_query($connect, $query);
    
   
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
         $name = $row['name'];
         $email = $row['email'];
         $gender = $row['gender'];
         //$address = $row['address'];
       //  $joiningDate = $row['joiningDate'];
         $phone = $row['phone'];
         $bloodGroup = $row['bloodGroup'];
         $dob = $row['dob'];
		
      }  
    }
		
		
	}
    
    
   

else{
		 $name = "";
         $email = "";
         $gender = "";
         $address = "";
         $joiningDate = "";
         $phone = "";
         $bloodGroup = "";
         $dob = "";
    }
	
	mysqli_free_result($result);
    mysqli_close($connect);

?>