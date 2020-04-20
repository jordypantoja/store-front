<?php
session_name('store');
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
include('connect.php');

?>
