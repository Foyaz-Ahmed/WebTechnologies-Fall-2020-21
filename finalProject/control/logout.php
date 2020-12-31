<?php

session_start();

if(session_destroy())
{
setcookie("userId","", time() - (86400 * 50), "/"); 
header("Location: ../view/login.php");
}

?>