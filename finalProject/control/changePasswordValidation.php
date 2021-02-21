<?php

$err="";
 if (isset($_POST['submit'])) {
	 
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$rpass = $_POST['rpass'];
	
	
	 
	
	 
    
	if (empty($_POST['pass']) || empty($_POST['cpass']) || empty($_POST['rpass'])) {
       
			$err ="Empty field";
			
	
	}
	
	if(!empty($cpass)){
        
         $length = strlen($cpass);
		 echo $length;
		 if($length!="8" && $length<"8")
			 
			 {
				 $passError ="You should atleast 8 characters";
			 }
	   }

 }

?>