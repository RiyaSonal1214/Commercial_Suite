<?php include 'con_db.php';
	$floor=$_GET['floor'];

	$qry=mysqli_query($con,"SELECT * FROM floor WHERE floor_no='$floor'") or die(mysqli_error($con));
	$row=mysqli_fetch_array($qry);
	$tot_shops=$row['total_shop'];

	$qr=mysqli_query($con,"SELECT shop_no FROM shops where floor='$floor' ORDER BY shop_no DESC");
  $rw=mysqli_num_rows($qr); 
  $read=mysqli_fetch_array($qr);

  $sel=mysqli_query($con,"SELECT purchase_charge FROM maintenance");
  $col=mysqli_fetch_array($sel);
  $pur=$col['purchase_charge'];

  $sele=mysqli_query($con,"SELECT num_floor FROM apartment");
  $arr=mysqli_fetch_array($sele);
  $num=$arr['num_floor'];

      if($rw>0)
      {
        $shno=$read['shop_no'];
        
        $shop_no=++$shno;
      }
      else
      {
        $shop_no='SHOP'.$floor.'01';
      }

      for ($i=0; $i <=$floor ; $i++) 
    { 
      if($floor==0)
      {
        $charge=$pur;
      }
      else
      {
        $charge=$pur-pow(2, $i);
        if($charge<0)
        {
          $charge=2;
        }
      }

    }
  

  echo "$shop_no".'|'."$charge";
     
	



  


 ?>
