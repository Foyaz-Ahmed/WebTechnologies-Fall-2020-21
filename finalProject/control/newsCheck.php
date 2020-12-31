<?php
include('db.php');
 
$error="";


if (isset($_POST['submit'])) {
		  
if (empty($_POST['catagory']) || empty($_POST['headline'])|| empty($_POST['details']))
{
$error = "Empty field";

 
}

  
  else
{
		$headline = $_POST["headline"];
		$details = $_POST["details"];
		
		
		
		 
		$connection = new db();
		$conobj=$connection->OpenCon();


		
		$qrr =  db::postNews($conobj,$_POST['catagory'],$headline, $details, $name);
		

		

		if($qrr==1)
			
			{
				$successMsg = "News posted Successfully";
			}
		else 
		{
			echo "error occured";
		}
		
		
		}
		
		}
		?>