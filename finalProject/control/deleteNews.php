<?php
include ('../control/db.php');
$id = $_GET['catagory'];

$connection = new db();
		
$conobj=$connection->OpenCon();


$sql = db::deleteNewsInfo($conobj,$id);



	if ($sql === TRUE) {
		echo "DELETED SUCCESSFULLY";
		header('Location:../view/newsInfo.php');
		}
		else {
		echo "Error Deleting record: " ;
		}



?>