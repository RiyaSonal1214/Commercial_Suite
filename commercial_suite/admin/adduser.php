<?php 
    include 'con_db.php';
    include 'session.php'; 
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
        <div class="row">
        <div class="col-md-6"></div>
            <div class="col-lg-12">
                    <section >
                        <h1 style="text-align: center;">
                           Manage Users
                        </h1>
                        <div class="panel-body"> 
                                <form role="form" action="" method="post">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">User Name</label>
                                                <input id="cc-pament" name="uname" type="text" pattern="[A-Za-z\s]+" class="form-control" aria-required="true" aria-invalid="false" placeholder="USERNAME" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Password</label>
                                                <input id="cc-name" name="pass" type="password" class="form-control cc-name valid" placeholder="PASSWORD" required="">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Confirm Password</label>
                                                <input id="cc-number" name="cpass" type="password" class="form-control cc-number identified visa" placeholder="CONFIRM PASSWORD" required="">
                                                
                                            </div>
                                           
                                            <div>
                                                <button id="Change-button" type="submit" name="add" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Add User</span>
                                                </button>
                                            </div>
</div>
 </form>
                        </div>
                    </section>
                    <hr>
                    <table class="table table-bordered  table-hover" style="background-color:white" border="solid green 1px">
                        <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>User Name</th>
                                                        <th>Password</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php include('con_db.php'); 
                                                        $a=1;  
                                                    $sql=mysqli_query($con,"SELECT * from user") or die(mysqli_error($con));
                                                    while($row=mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo $row['username']; ?></td>
                                                    <td><?php echo $row['pwd']; ?></td>
                                                    <td>
                                                        <a href="delete_user.php?id=<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure to delete'); "  class="btn btn-danger"  title="Delete"><i class="fa fa-trash"></i></a>
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
<?php 
    if(isset($_POST['add']))
    {
        $uname=mysqli_real_escape_string($con,$_POST['uname']);
        $pass=mysqli_real_escape_string($con,$_POST['pass']);
        $cpass=mysqli_real_escape_string($con,$_POST['cpass']);

        $qry=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
        $row=mysqli_fetch_array($qry);
        $count=mysqli_num_rows($qry);
        $apid=$row['apartment_id'];

        $qry=mysqli_query($con,"SELECT * FROM user WHERE username='$uname'");
        $rows=mysqli_num_rows($qry);
            if($rows<=0)
            {
                if($pass==$cpass)
                {
                    $sql=mysqli_query($con,"INSERT INTO `user`(`apartment_id`, `username`, `pwd`) VALUES ('$apid','$uname','$pass')");
                    if($sql)
                    {
                        echo '<script>alert("User Added Successfully"); window.location="homepage.php"; </script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed"); window.location="adduser.php"; </script>'; 
                    }
                }
                else
                {
                    echo '<script>alert("Password mismatch, Try again"); window.location="adduser.php"; </script>';
                }
            }
            else
            {
                    echo '<script>alert("User Already Exists"); window.location="adduser.php"; </script>';
            }

        }



?>
