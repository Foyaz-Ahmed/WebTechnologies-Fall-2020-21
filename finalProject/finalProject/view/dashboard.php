<?php
session_start(); 
if(empty($_SESSION["userID"])) 
{
header("Location: ../control/login.php");
}
include('../control/dashboardCheck.php');
//include('../control/profileCheck.php');

include('innerPage.php');
?>



