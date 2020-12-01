<?php

		  include ('registeValidation.php');


		  $jdate = $address = "";
		  $jDateError ="";
		  $addressError ="";
		  
		  
		 
		  
		if (isset($_POST['submit']))
		{
		  $jdate = $_POST["jdate"];
		  $address = $_POST["address"];
		  
		  
		  if (empty($address))
		{
			$addressError = "Enter Your Address";
		}
		
		if (empty($jdate))
		{
			$jDateError = "Fill up the joining Date";
		}
			
		}
			
		  

?>