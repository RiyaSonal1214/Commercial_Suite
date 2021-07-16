<?php include 'con_db.php';
	$type=$_GET['id'];

	$qry=mysqli_query($con,"SELECT * FROM staff_day_salary WHERE type='$type'") or die(mysqli_error($con));
	$row=mysqli_fetch_array($qry);
	$count=$row['type'];

	if($count=='WatchMan')
	{
		echo $row['per_day_salary'];
	}
	elseif ($count=='Maid')
	{
		echo $row['per_day_salary'];
	}
	elseif ($count=='Manager')
	{
		echo $row['per_day_salary'];
	}

?>