<?php 

/**
this function is used to keep information 
in any page while the browser is running
*/
session_start();

$_SESSION['user'] = "galva";
$_SESSION['state'] = "logged";

?>