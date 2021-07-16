<?php 
	include 'con_db.php';
	$p_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM payment WHERE pay_id='$p_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="view_payment.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_payment.php"; </script>';
	}

?>