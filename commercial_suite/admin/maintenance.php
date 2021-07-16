<?php 
    include 'con_db.php';
    include 'session.php'; 
    $qry=mysqli_query($con,"SELECT * FROM maintenance ") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
    $count=mysqli_num_rows($qry);

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
        
                <br>
                 <?php
                                        if($count <= 0)
                                        {
                                        ?>

        <div class="row">
        <div class="col-md-6"></div>
            <div class="col-lg-12">
                    <section >
                                <!-- DATA TABLE -->
                               <h1 style="text-align: center;">
                           Maintenance Information
                        </h1>
                                
                                    <form action="" method="post" enctype="multipart/form-data">   
                                            <div class="row"> 

                                        <div class="col-lg-4"></div>
                                         <div class="col-lg-4"> 
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Per sq.ft purchase charge</label>
                                                <input id="cc-pament" name="pcharge" type="text"  class="form-control" aria-required="true" aria-invalid="false"  placeholder="PER SQUARE FEET PURCHASE CHARGES" required="" pattern="[0-9.]+">
                                            </div> 
                                            </div>
                                            </div>

                                            <div class="row"> 

                                        <div class="col-lg-4"></div>
                                         <div class="col-lg-4"> 
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Per sq.ft charge</label>
                                                <input id="cc-pament" name="charge" type="text"  class="form-control" aria-required="true" aria-invalid="false"  placeholder="PER SQUARE FEET CHARGES" required="" pattern="[0-9.]+">
                                            </div>    
                                            </div>
                                            </div>

                                            <div class="row"> 

                                        <div class="col-lg-4"></div>
                                         <div class="col-lg-4"> 
                                                <button id="Change-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save</span>
                                                </button>
                                            </div>
                                            </div>

                                        </form>
                                   

                                <?php } else { ?>
                        <h1 style="text-align: center;">Maintenance Details</h1>
                        <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">   
                                            <div class="row"> 

                                        <div class="col-lg-4"></div>
                                         <div class="col-lg-4"> 
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Per sq.ft purchase charge</label>
                                                <input id="cc-pament" name="vpcharge" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['purchase_charge']; ?>"   required="" pattern="[0-9.]+">
                                            </div>
                                            </div>
                                            </div>

                                            <div class="row"> 

                                        <div class="col-lg-4"></div>
                                         <div class="col-lg-4"> 
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Per sq.ft charge</label>
                                                <input id="cc-pament" name="vcharge" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['per_sq_feet_charge']; ?>" pattern="[0-9.]+">
                                            </div>    

                                            </div>
                                            </div>

                                            <div class="row"> 

                                        <div class="col-lg-4"></div>
                                         <div class="col-lg-2"> 
                                                <button id="Change-button" type="submit" name="update" class="btn btn-lg btn-success btn-block">
                                                    <i class="fa fa-edit fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update</span>
                                                </button>
                                            </div>
                                            <div class="col-lg-2"> 
                                                 <button id="Change-button" type="submit"  onclick="return confirm('Are you sure to delete'); " name="delete" class="btn btn-lg btn-danger btn-block">
                                            <i class="fa fa-trash fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Delete</span>
                                            
                                        </button>
                                            </div>
                                            </div>

                                        </form>
                                    </div>
                                    </section>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>

                                <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Commercial Suite. All rights reserved. Designed by Riya & Sithara.</p>
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
<?php 
    if(isset($_POST['save']))
    {
         
        $sel=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
        $col=mysqli_fetch_array($sel);
        $apid=$col['apartment_id'];

        $pcharge=mysqli_real_escape_string($con,$_POST['pcharge']);
        $charge=mysqli_real_escape_string($con,$_POST['charge']);
           

        $qry=mysqli_query($con,"SELECT * FROM maintenance ORDER BY maintenance_id desc");
        $rows=mysqli_num_rows($qry);
        if($rows==1)
        {
            echo '<script>alert("Maintenance Info already exist"); window.location="maintenance.php"; </script>';
        }
        else
        {
             $sql=mysqli_query($con,"INSERT INTO `maintenance`( `apartment_id`,`purchase_charge`, `per_sq_feet_charge`, `up_date`) VALUES ('$apid','$pcharge','$charge',now())");
                        if($sql)
                        {
                            echo '<script>alert("Inserted Successful"); window.location="maintenance.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="maintenance.php"; </script>'; 
                        }
         }
    } 

    if(isset($_POST['update']))
    {
            $vpcharge=mysqli_real_escape_string($con,$_POST['vpcharge']);
            $vcharge=mysqli_real_escape_string($con,$_POST['vcharge']);
           
             $sql=mysqli_query($con,"UPDATE `maintenance` SET `purchase_charge`='$vpcharge',`per_sq_feet_charge`='$vcharge',`up_date`=now()");
                        if($sql)
                        {
                            echo '<script>alert("Updated Successful"); window.location="maintenance.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="maintenance.php"; </script>'; 
                        }
         
    } 

        if(isset($_POST['delete']))
    {
         
            $qry=mysqli_query($con,"DELETE FROM `maintenance`") or die(mysqli_error($con));
    if($qry==true)
    {
        echo '<script>alert("Deleted successfully"); window.location="maintenance.php"; </script>';
    }
    else
    {
        echo '<script>alert("Failed"); window.location="maintenance.php"; </script>';
    }
         
    } 
    ?>

    

