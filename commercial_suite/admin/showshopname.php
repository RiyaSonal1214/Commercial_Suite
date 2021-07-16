<?php include 'con_db.php';
	$shid=$_GET['id'];
	$qry=mysqli_query($con,"SELECT * FROM shop_owners WHERE shop_id='$shid'") or die(mysqli_error($con));
	$row=mysqli_fetch_array($qry);
	$o_id=$row['shop_o_id'];

	$qry1=mysqli_query($con,"SELECT * FROM shops WHERE shop_id='$shid'") or die(mysqli_error($con));
	$row1=mysqli_fetch_array($qry1);

	$qry2=mysqli_query($con,"SELECT * FROM payment WHERE shop_o_id='$o_id'") or die(mysqli_error($con));
	$row2=mysqli_fetch_array($qry2);
	$bal=$row2['balance'];
	if($bal>0)
	{
		$bal=$bal;
	}else{
		$bal=0;
	}


	echo $row['shop_name'].'|'.$row1['sq-feet'].'|'.$bal.'|'.$row2['pay_id'];


 ?>
 