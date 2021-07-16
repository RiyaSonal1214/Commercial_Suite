<?php 
    include 'con_db.php';
    include 'session.php'; 
    $a_id=$_GET['id'];
    $qry=mysqli_query($con,"UPDATE advertisement SET add_status='REJECTED' WHERE add_id='$a_id'") or die(mysqli_error($con));
    if($qry==true)
	{
		echo '<script>alert("Rejected successfully"); window.location="view_ad.php"; </script>';
	}
	else
	{
		echo '<script>alert("Failed"); window.location="view_ad.php"; </script>';
	}
?>