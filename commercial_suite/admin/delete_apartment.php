<?php 
	include 'con_db.php';
	$a_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM apartment WHERE apartment_id='$a_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_apartment.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_apartment.php"; </script>';
	}

?>