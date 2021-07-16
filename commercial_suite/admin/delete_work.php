<?php 
	include 'con_db.php';
	$s_id=$_GET['sid'];
	$w_id=$_GET['wid'];
	$qry=mysqli_query($con,"DELETE FROM work WHERE work_id='$w_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		$up=mysqli_query($con,"UPDATE apartment_staff SET staff_status='active' where staff_id='$s_id'");
		echo '<script>alert("Deleted successfully"); window.location="view_work.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_work.php"; </script>';
	}

?>