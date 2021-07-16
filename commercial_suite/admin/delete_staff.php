<?php 
	include 'con_db.php';
	$s_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM apartment_staff WHERE staff_id='$s_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_staff.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_staff.php"; </script>';
	}

?>