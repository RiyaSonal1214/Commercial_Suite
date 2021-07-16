<?php 
    include 'con_db.php';
    include 'session.php'; 
    $qry=mysqli_query($con,"SELECT * FROM parking ") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
    $count=$row['vehicle_number'];
    $status=$row['status'];


?>
<!DOCTYPE html>
<head>
<title>View Parking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body style="background-image:url('images/rohan/7.jpg')">
<section id="container">
<!--header start-->
<?php include('header.php'); ?>
<!--header end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="row">
        <div class="col-md-6"></div>
            <div class="col-lg-12">
                    <section >
                        <h1 style="text-align: center;">
                           Parking
                        </h1>
                        <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">   
                                        <div class="row">
                                        <div class="col-md-4"></div>
                                <div class="col-md-4">
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Vehicle Number</label>
                                                <input id="vnum" name="vnum" type="text"  class="form-control" aria-required="true" aria-invalid="false"  placeholder="VEHICLE NUMBER" required="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" onchange="showButton(this.value);">
                                            </div>    
                                            </div>
                                            </div>

                                            <div class="row"> 
                                            <div class="col-lg-5"></div>
                                            <div>
                                            <div class="col-lg-4">
                                                <div class="form-group has-success" id="display"></div> 
                                            </div>
                                            </div>
                                            </div>

                                        </form>
                        </div>
                    </section>
                    <hr>
                    <table class="table table-bordered  table-hover" style="background-color:white" border="solid green 1px">
                    <h1 style="text-align: center;">
                           Parking
                        </h1>
                        <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Vehicle Number</th>
                                                        <th>Check In/Check Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php include('con_db.php'); 
                                                        $a=1;     
                                                        $curdate=date('Y-m-d');         
                                                    $sql=mysqli_query($con,"SELECT * from parking where date(check_in)='$curdate' order by check_in") or die(mysqli_error($con));
                                                    while($row=mysqli_fetch_array($sql)){
                                                        $vid=$row['vehicle_number'];
                                                        $pid=$row['park_id'];

                                                ?>
                                                <tr>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo $row['vehicle_number']; ?></td>
                                                    <td>                                                <?php

                                                        $curdate=date('Y-m-d');
                                                        date_default_timezone_set("Asia/Kolkata"); 
                                                        $curtime=date('H:i');

                                                        $exist=mysqli_query($con,"SELECT * from parking WHERE park_id='$pid'"); 
                                                        $sr=mysqli_fetch_array($exist);
                                                        $arows=mysqli_num_rows($exist);
                                                        
                                                        $status=$sr['status'];

                                                        if($arows>0) {  
                                                            $checkintime=date('d-m-Y h:i a',strtotime($sr['check_in']));

                                                            $check=mysqli_query($con,"SELECT * from parking where park_id='$pid' and Date(check_out)='$curdate'"); 
                                                            $crows=mysqli_num_rows($check); 
                                                            if($crows>0) 
                                                            {
                                                                $read=mysqli_fetch_array($check);
                                                                $checkoutime=date('d-m-Y h:i a',strtotime($read['check_out']));
                                                                if ($status=='checkout') {
                                                                ?>

                                                                <span style="color: orange; font-weight: bold; font-size: 19px; ">Checked out at <?php echo $checkoutime; ?></span>

                                                                 <?php } } elseif($crows<=0) {?>
                                                                <span style="color: green; font-weight: bold; font-size: 19px; ">Checked in at <?php echo $checkintime; ?></span>
                                                                 
                
                                                                    <a href="checkoutparking.php? park_id=<?php echo $row['park_id']; ?>&vnum=<?php echo $row['vehicle_number']; ?>&date=<?php echo $curdate?>"; class="btn btn-warning">Check-out </a>
                                                                 
                                                                <?php } } ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                                </table>

            </div>
        </div>
        <!-- //tasks -->
        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Commercial Suite. All rights reserved. Designed by Riya & Sithara.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

</section>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function showButton(stype)
        {
              var name='<button id="check_in" type="submit" name="check_in" class="btn btn-lg btn-success" ><i class="fa fa-lock fa-lg" ></i>&nbsp;<span id="payment-button-amount">CHECKIN</span></button>';


                    document.getElementById('display').innerHTML=name;
                
        }
    </script>

</body>

</html>
<!-- end document-->
<?php 
    if(isset($_POST['check_in']))
    {
         
        $sel=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
        $col=mysqli_fetch_array($sel);
        $apid=$col['apartment_id'];

        $vnum=mysqli_real_escape_string($con,$_POST['vnum']);           
        if ($vnum==$count && $status=='checkin' )
        {
            echo '<script>alert("Vehicle has not checkedout"); window.location="parking.php"; </script>';
        } 
        else
        {
             $sql=mysqli_query($con,"INSERT INTO `parking`(`apartment_id`, `vehicle_number`, `check_in`, `check_out`, `status`) VALUES('$apid','$vnum',now(),'','checkin')");
                        if($sql)
                        {
                            echo '<script>alert("checked in Successful"); window.location="parking.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="parking.php"; </script>'; 
                        }
        } 
    }

    
?>

    

