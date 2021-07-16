<?php 
	session_start();
	$shop_id=$_SESSION['shop_id'];
	$sid=$_SESSION['sid'];
	$sname=$_SESSION['sname'];
	if(!(isset($shop_id)))
	{
		header('location:homepage.php');
	}


?>