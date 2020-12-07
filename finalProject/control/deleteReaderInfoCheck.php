<?php
include ('../control/db.php');
$id = $_GET['id'];

$connection = new db();
		
$conobj=$connection->OpenCon();

//echo $id;

$sql = db::deleteReaderInfo($conobj,$id);
$sql1 = db::deleteReaderLoginInfo($conobj,$id);


	if ($sql === TRUE && $sql1== TRUE) {
		echo "DELETED SUCCESSFULLY";
		header('Location:../view/showReaderInfo.php');
		}
		else {
		echo "Error Deleting record: " ;
		}



?>