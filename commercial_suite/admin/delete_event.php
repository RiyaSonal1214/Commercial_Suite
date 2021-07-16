<?php 
	include 'con_db.php';
	$e_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM event WHERE event_id='$e_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_event.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_event.php"; </script>';
	}

?>