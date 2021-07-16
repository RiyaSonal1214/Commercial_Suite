<?php 
	include 'con_db.php';
	$o_id=$_GET['id'];
	$sel=mysqli_query($con,"SELECT * FROM shop_owners,shops WHERE shops.shop_id=shop_owners.shop_id and shop_owners.shop_o_id='$o_id'");
	$col=mysqli_fetch_array($sel);
	$s_id=$col['shop_id'];
	$qry=mysqli_query($con,"DELETE FROM shop_owners WHERE shop_o_id='$o_id'") or die(mysqli_error($con));
	if($qry==true)
	{
		$up=mysqli_query($con,"UPDATE shops SET shop_status='available' where shop_id='$s_id'");
		echo '<script>alert("Deleted successfully"); window.location="view_shopowner.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_shopowner.php"; </script>';
	}

?>