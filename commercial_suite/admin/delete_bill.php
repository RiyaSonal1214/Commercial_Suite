<?php 
	include 'con_db.php';
	$m_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM maintenance_bill WHERE mbill_id='$m_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_bill.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_bill.php"; </script>';
	}

?>