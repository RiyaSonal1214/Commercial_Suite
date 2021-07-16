<?php 
    include 'con_db.php';
    include 'session.php'; 
?>
<!DOCTYPE html>
<head>
<title>Staff Attendance</title>
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
                   <section class="panel">
                                <!-- DATA TABLE -->
                               <header class="panel-heading">
                         Staff  Attendance
                        </header>
                                
                                    <table class="table table-bordered  table-hover" style="background-color:white" border="solid green 1px">
                                      <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Staff</th>
                                                        <th>Staff Code</th>
                                                        <th>Check In/Check Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php include('con_db.php'); 
                                                        $a=1;
                                                    $sql=mysqli_query($con,"SELECT * from apartment_staff where staff_status='assigned'") or die(mysqli_error($con));
                                                    while($row=mysqli_fetch_array($sql)){
                                                        $sid=$row['staff_id'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo $row['staff_name']; ?></td>
                                                    <td><?php echo $row['staff_no']; ?></td>
                                                    <td>                                                <?php 
                                                        $curdate=date('Y-m-d');
                                                        date_default_timezone_set("Asia/Kolkata"); 
                                                        $curtime=date('H:i');

                                                        $fromtime=mysqli_query($con,"SELECT from_time from work where staff_id='$sid' and work_status='assigned'");
                                                        $colm=mysqli_fetch_array($fromtime);
                                                        $fromtime=$colm['from_time'];                               
                                                        $maxtime=date('H:i',strtotime($fromtime.' +2 hours'));

                                                        $ttime=mysqli_query($con,"SELECT to_time from work where staff_id='$sid' and work_status='assigned'");
                                                        $col=mysqli_fetch_array($ttime);
                                                        $totime=$col['to_time'];

                                                        $exist=mysqli_query($con,"SELECT * from staff_attendance where staff_id='$sid' and date(date_time)='$curdate' and status='checkin'"); 
                                                        $sr=mysqli_fetch_array($exist);
                                                        $arows=mysqli_num_rows($exist);

                                                        $cout=mysqli_query($con,"SELECT * from staff_attendance where staff_id='$sid' and date(date_time)='$curdate' and status='present'"); 
                                                        $rs=mysqli_fetch_array($cout);
                                                        $cin=mysqli_num_rows($cout);

                                                        if($arows>0 || $cin>0) {  
                                                            $checkintime=date('d-m-Y h:i a',strtotime($sr['date_time']));

                                                            $check=mysqli_query($con,"SELECT * from staff_attendance where staff_id='$sid' and Date(date_time)='$curdate' and status='present'"); 
                                                            $crows=mysqli_num_rows($check); 
                                                            if($crows>0) 
                                                            {
                                                                $read=mysqli_fetch_array($check);
                                                                $checkoutime=date('d-m-Y h:i a',strtotime($read['date_time']));
                                                                ?>
                                                                <span style="color: orange; font-weight: bold; font-size: 19px; ">Checked out at <?php echo $checkoutime; ?></span>

                                                                 <?php } elseif($crows<=0) {?>
                                                                <span style="color: green; font-weight: bold; font-size: 19px; ">Checked in at <?php echo $checkintime; ?></span>
                                                                 <?php 
                                                                 
                                                                 if($curtime<=$totime){ ?>
                                                                    <span style="color: blue; font-weight: bold; font-size: 19px; ">  working hours</span> 

                                                                <?php } else{?>
                                                                    <a href="checkout.php?staff_id=<?php echo $sr['staff_id']; ?>&date=<?php echo $curdate?>" class="btn btn-warning">Check-out </a>
                                                                 
                                                                <?php }}}
                                                                elseif ($curtime>$maxtime) {?>
                                                                    <span style="color: blue; font-weight: bold; font-size: 19px; "> Absent</span>
                                                                 <?php }   elseif($arows<=0) { ?>
                                                                    <a href="checkin.php?staff_id=<?php echo $row['staff_id']; ?>" class="btn btn-primary">Check-in</a>
                                                                <?php } ?>
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

</body>

</html>
<!-- end document-->
