<?php 
	include 'con_db.php';
	$date=$_GET['date'];
	$time=$_GET['time'];

	$sqr=mysqli_query($con,"SELECT * FROM booking WHERE `book_for`='$date' and `time`='$time'");
	$row=mysqli_num_rows($sqr);
	if($row > 0)
	{
		echo 1;
	}else 
	{
		echo 0;
	}
?>