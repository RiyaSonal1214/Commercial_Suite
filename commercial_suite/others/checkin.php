<?php include 'session.php'; 
	include 'con_db.php'; 
	$staff_id=$_GET['staff_id'];
	$sql=mysqli_query($con,"INSERT INTO `staff_attendance`(`staff_id`, `date_time`, `status`) VALUES ('$staff_id',now(),'checkin')") or die(mysqli_error($con));
	if($sql)
	{
		echo '<script>alert("Checked in"); window.location="staff_attendance.php"; </script>';
	}
	else{
		echo '<script>alert("Checkin falied"); window.location="staff_attendance.php";</script>';
	}

?>