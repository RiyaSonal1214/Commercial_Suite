<?php 
	include 'con_db.php';
	$r_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM shop_rent WHERE shop_r_id='$r_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_rent.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_rent.php"; </script>';
	}

?>