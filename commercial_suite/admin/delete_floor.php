<?php 
	include 'con_db.php';
	$f_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM floor WHERE floor_id='$f_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_floor.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_floor.php"; </script>';
	}

?>