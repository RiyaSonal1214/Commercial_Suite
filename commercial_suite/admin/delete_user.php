<?php 
	include 'con_db.php';
	$u_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM user WHERE user_id='$u_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		echo '<script>alert("Deleted successfully"); window.location="adduser.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="adduser.php"; </script>';
	}

?>