<?php include('session.php'); ?>
<?php
	include('con_db.php'); 

    $qry=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
    $apid=$row['apartment_id'];

	$park_id=$_GET['park_id'];
	$vnum=$_GET['vnum'];
	$date=$_GET['date'];

	$sql=mysqli_query($con,"UPDATE `parking` SET `check_out`=now(),`status`='checkout' WHERE apartment_id='$apid' and vehicle_number='$vnum' AND date(check_in)='$date'") or die(mysqli_error($con));
	if($sql)
	{
		echo '<script>alert("Checked out"); window.location="parking.php"; </script>';
	}
	else{
		echo '<script>alert("Checkout falied"); window.location="parking.php";</script>';
	}

?>