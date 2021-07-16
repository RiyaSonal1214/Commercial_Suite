<?php include('session.php');
	include('con_db.php'); 
	$staff_id=$_GET['staff_id'];
	$date=$_GET['date'];
      $cond=date('Y-m-d',strtotime($date.' -1 days'));
	$sql=mysqli_query($con,"UPDATE staff_attendance SET status='present', date_time=now() where status='checkin' and staff_id='$staff_id'") or die(mysqli_error($con));
	if($sql)
	{
		echo '<script>alert("Checked out"); window.location="staff_attendance.php"; </script>';
	}
	else{
		echo '<script>alert("Checkout falied"); window.location="staff_attendance.php";</script>';
	}

?>