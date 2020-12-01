<?php


if(isset($_POST['search']))
{
	
   $error="";
    $id = $_POST['id'];
	$name = $email = $gender = $phone = $bloodGroup = $dob = "";
    

    $connect = mysqli_connect("localhost", "root", "","mydb");
    
   
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
         //$joiningDate = $row['joiningDate'];
         $phone = $row['phone'];
         $bloodGroup = $row['bloodGroup'];
         $dob = $row['dob'];
		
      }  
    }
    
   
    else {
        $error ="<b>Undifined ID</b>";
         
         $name = "";
         $email = "";
         $gender = "";
         $phone = "";
         $bloodGroup = "";
         $dob = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}


else{
		 $name = "";
         $email = "";
         $gender = "";
        // $address = "";
         //$joiningDate = "";
         $phone = "";
         $bloodGroup = "";
         $dob = "";
    }


?>