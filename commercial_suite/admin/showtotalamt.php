<?php include 'con_db.php';
	$shid=$_GET['shopid'];
	$type=$_GET['type'];
	
	if($type=='FULL PAYMENT')
	{
	  $qry=mysqli_query($con,"SELECT * FROM shops WHERE shop_id='$shid'") or die(mysqli_error($con));
	  $row=mysqli_fetch_array($qry);
	  echo $row['shop_cost'];
	}
	else if ($type=='MAINTENANCE') 
	{
	  $qry1=mysqli_query($con,"SELECT * FROM shops,maintenance_bill WHERE shops.shop_id=maintenance_bill.shop_id='$shid'") or die(mysqli_error($con));
	  $row1=mysqli_fetch_array($qry1);
	  echo $row1['total_amt'];
	}

 ?>