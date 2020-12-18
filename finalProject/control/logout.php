<?php

session_start();
setcookie("userId",$cookie_value, time() - (86400 * 50), "/"); 
if(session_destroy())
{
header("Location: ../view/login.php");
}

?>