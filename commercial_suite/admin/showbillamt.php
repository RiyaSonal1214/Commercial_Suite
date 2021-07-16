<?php include 'con_db.php';
	$shid=$_GET['shopid'];
	$type=$_GET['type'];
	$date=$_GET['date'];
	
	if($type=='MAINTENANCE')
	{
		$qry=mysqli_query($con,"SELECT * FROM maintenance_bill WHERE shop_id='$shid' and month='$date'") or die(mysqli_error($con));
		$row=mysqli_fetch_array($qry);
		echo $row['total_amt'];
	}
?>