	<?php
	
		$name = $email = $address = $phone = $bGroup = $gender = $dob = "";
		  $nameError ="";
		  //$userIdError ="";
		  $emailErr ="";
		  $bloodgroupError="";
		  $genderError ="";
		  $noError ="";
		  $numberrError ="";
		  $dobError="";
		  $addressError="";
		  $address="";
		  
		if (isset($_POST['submit']))
		{
		  
		  $name = $_POST["mname"];
		  $email = $_POST["memail"];
		  $phone = $_POST["mphone"];
		 // $bGroup = $_POST["bloodgroup"];
		  echo $bGroup;
		  $dob = $_POST["date"];
		  $address = $_POST["address"];
		  
		if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/",$name))
		{
			$nameError =  "Please enter valid name"; 
			
		}
		else{
			$name;
		}
		
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
        $emailErr = "Invalid email format"; 
		}

		
		if (empty($_POST["gender"]))
		{
			$genderError = "Seclect the Gender";
		}
		/*if ($bGroup!="A Positive" || $bGroup!="A Negetive" ||  $bGroup != "B Positive" || $bGroup !="B Negetove" || $bGroup != "O Positive" || $bGroup !="O Negetove" );
		{
			$bloodgroupError = "Choose blood Group";
		}
		*/
		if(isset($phone))
			{
				 // Allow +, - and . in phone number
				 $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
				 // Remove "-" from number
				 $phone_to_check = str_replace("-", "", $filtered_phone_number);
				 // Check the lenght of number
				 // This can be customized if you want phone number from a specific country
				 if (strlen($phone_to_check) == 11 || strlen($phone_to_check) == 14) {
					$phone;
					
				 }
				  else {
				  $noError = "you have to put valid phone Number";
				 }
			}
		
		if (empty($phone))
		{
		$noError = "Mobile Number is required";
		}
		 else if (!is_numeric($phone))
		{
			$number = "";
			$numberrError = "Please Enter Valid Number";
		}
		
		if (empty($dob))
		{
			$dobError = "Seclect the Date of Birth";
		}
	
		
		  
		  
		  if (empty($address))
		{
			$addressError = "Enter Your Address";
		}
		

		
		}
		
		
		?>