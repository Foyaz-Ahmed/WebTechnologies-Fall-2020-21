 <?php
 
$id = $_SESSION["userID"];
$position = $_SESSION["Position"];
$error="";
global $name;

$connect = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Error: " . mysqli_error($conn));

if($position == "Admin" || $position == "News Editor" || $position =="Journalist"){   

   
    
    

    $query = "SELECT * FROM `officeinfo` WHERE `userId` = '$id'";
    
    $result = mysqli_query($connect, $query);
    
   
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
         $name = $row['name'];
	
		
      }  
    }
	
}
   else if($position="Reader")
   {
	   
    $query = "SELECT * FROM `readerregistrationinfo` WHERE `userId` = '$id'";
    
    $result = mysqli_query($connect, $query);
    
   
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
         $name = $row['name'];
	
		
      }  
    }
   }
    
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    





?>