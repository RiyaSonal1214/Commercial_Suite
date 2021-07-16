<?php 
	include 'con_db.php';
	$s_id=$_GET['id'];
	$qry=mysqli_query($con,"DELETE FROM shops WHERE shop_id='$s_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		 $up=mysqli_query($con,"UPDATE shops SET shop_status='available' where shop_id='$s_id'");
		 echo '<script>alert("Deleted successfully"); window.location="view_shop.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_shop.php"; </script>';
	}

?>