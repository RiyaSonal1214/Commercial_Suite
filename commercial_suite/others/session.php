<?php 
	session_start();
	$u_name=$_SESSION['uname'];
	if(!(isset($u_name)))
	{
		header('location:homepage.php');
	}


?>