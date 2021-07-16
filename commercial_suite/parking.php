<?php 
    include 'con_db.php';
    include 'session.php'; 
    $qry=mysqli_query($con,"SELECT * FROM parking ") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
    $count=$row['vehicle_number'];
    $status=$row['status'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <!-- <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> -->
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include 'menu.php';?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Parking</h3>
                                        </div>
                                        <form action="" method="post" enctype="multipart/form-data">   

                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Vehicle Number</label>
                                                <input id="vnum" name="vnum" type="text"  class="form-control" aria-required="true" aria-invalid="false"  placeholder="VEHICLE NUMBER" required="" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" onchange="showButton(this.value);">
                                            </div>     

                                            <div class="row"> 
                                            <div class="col-lg-2"></div>
                                            <div>
                                            <div class="col-lg-4">
                                                <div class="form-group has-success" id="display"></div> 
                                            </div>
                                            </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-10">
                            <div class="card">
                            <div class="card-header"> <h3 class="text-center title-2">Parking Details</h3></div>
                            <div class="card-body">
                                    <div class="panel-body">
                                                <div class="col-md-12">
                                                    <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Vehicle Number</th>
                                                        <th>Check In/Check Out</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tbody>
                                                    <?php include('con_db.php'); 
                                                        $a=1;     
                                                        $curdate=date('Y-m-d');         
                                                    $sql=mysqli_query($con,"SELECT * from parking") or die(mysqli_error($con));
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

                                                        $exist=mysqli_query($con,"SELECT * from parking WHERE park_id='$pid' and vehicle_number='$count'"); 
                                                        $sr=mysqli_fetch_array($exist);
                                                        $arows=mysqli_num_rows($exist);
                                                        
                                                        $status=$sr['status'];

                                                        if($arows>0) {  
                                                            $checkintime=date('d-m-Y h:i a',strtotime($sr['check_in']));

                                                            $check=mysqli_query($con,"SELECT * from parking where park_id='$pid' and vehicle_number='$count'"); 
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
                                                                 
                
                                                                    <a href="checkoutparking.php? park_id=<?php echo $row['park_id']; ?>&vnum=<?php echo $row['vehicle_number']; ?>"; class="btn btn-warning">Check-out </a>
                                                                 
                                                                <?php } } ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
                                   
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
    <script type="text/javascript">
        function showButton(stype)
        {
              var name='<button id="check_in" type="submit" name="check_in" class="btn btn-lg btn-success" ><i class="fa fa-lock fa-lg" onclick="check_in(this.value);" ></i>&nbsp;<span id="payment-button-amount">CHECKIN</span></button>';


                    document.getElementById('display').innerHTML=name;
                
        }
    </script>

        
    <script>
        function showsalary(vnum) {

          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById('check_in').value=this.responseText;
            }
          }
           xmlhttp.open("GET","showavail.php?id="+vnum,true);
          xmlhttp.send();
        }
    </script>
    <!-- Main JS-->
    <script src="js/main.js"></script>

  
                        

</body>

</html>
<!-- end document-->
<?php 
    if(isset($_POST['check_in']))
    {
         
        $sel=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
        $col=mysqli_fetch_array($sel);
        $apid=$col['apartment_id'];
        $pnum=$col['num_slot_parking'];

        $qry=mysqli_query($con,"SELECT count(*) FROM parking ") or die(mysqli_error($con));
        $num=mysqli_fetch_array($qry);
        $park=$num[0];

        $vnum=mysqli_real_escape_string($con,$_POST['vnum']);  

        if ($park<=$pnum)
        {       
            if ($vnum==$vid && $status=='checkin' )
            {
                echo '<script>alert("Vehicle has not checkedout"); window.location="parking.php"; </script>';
            } 
            else
            {
                 $sql=mysqli_query($con,"INSERT INTO `parking`(`apartment_id`, `vehicle_number`, `check_in`, `check_out`,`to_date`, `status`) VALUES('$apid','$vnum',now(),'',curdate(),'checkin')");
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
        else
        {
            echo '<script>alert("Parking Full"); window.location="parking.php"; </script>'; 
        }
    }

    
?>

    

