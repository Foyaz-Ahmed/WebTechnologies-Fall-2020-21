<?php
include ('../control/db.php');
$id = $_GET['id'];

$connection = new db();
		
$conobj=$connection->OpenCon();

//echo $id;

$sql = db::deleteOfficeInfo($conobj,$id);
$sql1 = db::deleteOfficeLoginInfo($conobj,$id);


	if ($sql === TRUE && $sql1== TRUE) {
		echo "DELETED SUCCESSFULLY";
		header('Location:../view/showOfficeInfo.php');
		}
		else {
		echo "Error Deleting record: " ;
		}



?>