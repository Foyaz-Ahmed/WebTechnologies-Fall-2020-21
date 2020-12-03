<?php
$error="";
$type="";
 if (isset($_POST['submit'])) {
	 
	 
	 if(empty($_POST['type'])){
		 
		 
		 $error= "<b> /Choose Employee type for insert</b> ";
		 
	 }
	 
	 
	 else{
		//$type= $_POST['type'];
		
		if($_POST['type']=="Admin"){
			header('location:../view/addAdmin.php');
			
		}
		else if($_POST['type']=="News Editor")
		{
			header('location:../view/addNewsEditor.php');
		}
		else{
			header('location:../view/addJournalist.php');
		}
	 }
	 
	 
 }
?>