<?php 
    include 'con_db.php';
    include 'session.php';
    $month=date('m');

    $y=date('Y');
    $days=cal_days_in_month(CAL_GREGORIAN, $month, $y);
    $sel_st=mysqli_query($con,"SELECT * FROM apartment_staff");
    while($res=mysqli_fetch_array($sel_st))
    {
        $staff_id=$res['staff_id'];
        $salary=$res['salary'];
        $paid_leaves=2;
        $sel_pt=mysqli_query($con,"SELECT count(*) FROM staff_attendance where month(date_time)='$month' and staff_id='$staff_id' and status='present' OR status='checkin'");
        $pcount=mysqli_fetch_array($sel_pt);
        $sel_at=mysqli_query($con,"SELECT count(*) FROM staff_attendance where month(date_time)='$month' and staff_id='$staff_id' and status='absent'");
        $acount=mysqli_fetch_array($sel_at);
        $present=$pcount[0]; $absent=$acount[0];
        if($absent <= $paid_leaves)
        {
            $ded_days=0;$ded_amt=0;
            $tot= $salary * $days;
        }
        else if($absent > $paid_leaves)
        {
            $ded_days=$absent - $paid_leaves;
            $ded_amt= $ded_days * $salary;
            $gt= $salary * $days;
            $tot= $gt - $ded_amt;
        }
        $sel_sts=mysqli_query($con,"SELECT * FROM staff_salary where month='$month' and staff_id='$staff_id'");
        $rcount=mysqli_num_rows($sel_sts);
        $sel=mysqli_query($con,"SELECT * FROM staff_salary ORDER BY sal_no DESC");
        $rows=mysqli_num_rows($sel);
        $read=mysqli_fetch_array($sel);
        if($rows>0)
        {
            $wcode=++$read['sal_no'];
        }
        else
        {
            $wcode='SL001';
        }
        if($rcount <= 0)
        {
            $d=date('d');
            if ($d==$days) 
            {
            $sq=mysqli_query($con,"INSERT INTO `staff_salary`( `staff_id`, `month`, `paid_leaves`, `present`, `absent`, `deduction_days`,`deduction`, `total_sal`, `sal_no`) VALUES ('$staff_id','$month','$paid_leaves','$present','$absent','$ded_days','$ded_amt','$tot','$wcode')");
            }
        }

    } 
?>
<!DOCTYPE html>
<head>
<title>Commercial Suite</title>
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
                <br><div class="panel-body">
                            <div class="position-center">
                <div class="col-md-2"></div>
                <form action="" method="post">
                <div class="col-md-8">
                <center>
                  <div class="col-md-4">
                    <select name="month" class="form-control">
                        <option>Select Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                   </div>
                   <div class="col-md-2">
                        <input type="submit" name="search" value="Search" class="btn btn-success">
                   </div>
                   </center>
                </div>

               </form>
            </div>

    </div>
        <div class="row">
        <div class="col-md-6"></div>
            <div class="col-lg-12">
                    <section class="panel">
                    <?php include('con_db.php'); if(isset($_POST['search'])) 
                {
                    $month=$_POST['month'];
                 ?>
                                <!-- DATA TABLE -->
                               <header class="panel-heading">
                           Salary Information
                        </header>
                                
                                    <table class="table table-bordered  table-hover" style="background-color:white" border="solid green 1px">
                                        <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>Staff Name</th>
                                                <th>Salary Number</th>
                                                <th>Month</th>
                                                <th>Present</th> 
                                                <th>Absent</th> 
                                                <th>Paid Leave</th>
                                                <th>Deduction</th>                      
                                                <th>Total Salary</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM staff_salary,apartment_staff where staff_salary.staff_id=apartment_staff.staff_id and staff_salary.month='$month'");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                <td><?php echo $row['staff_name'];  ?></td>
                                                <td><?php echo $row['sal_no'];  ?></td>
                                                <td><?php $m=$row['month'];
                                                    if($m=='01')
                                                  {
                                                    $mon='January';
                                                  }elseif($m=='02')
                                                  {
                                                    $mon='February';
                                                  }elseif($m=='03')
                                                  {
                                                    $mon='March';
                                                  }elseif($m=='04')
                                                  {
                                                    $mon='April';
                                                  }elseif($m=='05')
                                                  {
                                                    $mon='May';
                                                  }elseif($m=='06')
                                                  {
                                                    $mon='June';
                                                  }elseif($m=='07')
                                                  {
                                                    $mon='July';
                                                  }elseif($m=='08')
                                                  {
                                                    $mon='August';
                                                  }elseif($m=='09')
                                                  {
                                                    $mon='September';
                                                  }elseif($m=='10')
                                                  {
                                                    $mon='October';
                                                  }elseif($m=='11')
                                                  {
                                                    $mon='November';
                                                  }elseif($m=='12')
                                                  {
                                                    $mon='December';
                                                  } echo $mon;
                                                  ?></td>
                                                <td><?php echo $row['present'];  ?></td>
                                                <td><?php echo $row['absent'];  ?></td>
                                                <td><?php echo $row['paid_leaves'];  ?></td>
                                                <td><?php echo $row['deduction'];  ?></td>
                                                <td><?php echo $row['total_sal'];  ?></td> 
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
                                    </table>
                                </div>

                <input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv1();' style="margin-left: 20px;margin-bottom: 20px;">
                    <?php } ?>
                                <!-- END DATA TABLE -->
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
        </div>
        <!-- //tasks -->
        
</section>

</section>
<!--main content end-->
</section>
    <script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>
    <script type="text/javascript">
        $(window).load( function() {

            $('#mycalendar').monthly({
                mode: 'event',
                
            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }

        });
    </script>
    <!-- //calendar --> 

</body>

</html>
<!-- end document-->
