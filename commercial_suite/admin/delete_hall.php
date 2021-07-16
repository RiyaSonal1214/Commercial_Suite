<?php 
	include 'con_db.php';
	$h_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM hall WHERE hall_id='$h_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_hall.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_hall.php"; </script>';
	}

?>