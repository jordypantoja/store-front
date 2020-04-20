<?php
// Ensures we have started the session to keep track of backend logins
session_name('store');
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
// Loads DB Connection
include('connect.php');

?>
