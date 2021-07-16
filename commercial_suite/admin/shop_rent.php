<?php 
    include 'con_db.php';
    include 'session.php';     
    $s_id=$_GET['id'];
    $s_type=$_GET['stype'];
    $qry=mysqli_query($con,"SELECT * FROM shop_owners,shops WHERE shops.shop_id=shop_owners.shop_id and shops.shop_id='$s_id'");
    $row=mysqli_fetch_array($qry);
    $o_id=$row['shop_o_id'];
    $sdate=$row['occ_date'];
    $edate=$row['conend_date'];
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
        <div class="row">
            <div class="col-lg-12">
                    <section>
                        <h1 style="text-align: center;">
                           Shop Rent/Lease Details
                        </h1>
                        <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">   

                                        <div class="row">
                                        <div class="col-lg-2"></div>
                                            <div class="col-lg-4">
                                            <div class="form-group"  >
                                                
                                                <label for="cc-payment" class="control-label mb-1">Agreement Type</label>
                                                 <input id="cc-pament" name="atype" pattern="[A-Za-z\s]+" required="" placeholder="AGREEMENT TYPE" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $s_type; ?>" readonly="" >
                                            </div>
                                            </div>



                                         <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Advance</label>
                                                   <input id="cc-pament" pattern="[0-9]+" required="" placeholder="ADVANCE MADE" name="advance" type="number" required="" min="25000" onchange="showBox('<?php echo $s_type;?>')" class="form-control" aria-required="true" aria-invalid="false" >
                                                </div>
                                            </div>
                                       </div>


                                        <div class="row"> 

                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4">
                                                <div class="form-group" id="display"></div> 
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group" id="display1"></div> 
                                            </div>
                                            </div>
                                       

                                            <div class="row">
                                        <div class="col-lg-2"></div>
                                         <div class="col-lg-4">
                                                <div class="form-group" id="display2"></div> 
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group" id="display3"></div> 
                                            </div>
                                            </div>

                                            <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Agreement Start Date </label>
                                                <input id="cc-pament" name="agrsdate" id="start" type="date" required="" class="form-control" aria-required="true" aria-invalid="false" onchange="showStartValid()">
                                            </div>
                                            </div>
                                             
 
                                         <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Agreement End Date</label>
                                                <input id="cc-pament" name="agredate" id="end" type="date" required="" class="form-control" aria-required="true" aria-invalid="false" onchange="showEndValid()">
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

                            </div>
                                        </form>
                        </div>
                    </section>
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

    <script type="text/javascript">
        function showBox(stype)
        {
            //alert(stype);
            if(stype=='RENT')
            {
                var name='<label for="cc-payment" class="control-label mb-1">Owner</label><input id="cc-pament" name="rname" pattern="[A-Za-z/s]+" required="" placeholder="NAME OF SHOP RENTER" type="text" class="form-control" aria-required="true" aria-invalid="false" >';

                var contact='<label for="cc-payment" class="control-label mb-1">Contact</label><input id="cc-pament" name="rtel" pattern="/^{10}$/" required="" placeholder="RENTER CONTACT" type="tel" class="form-control" aria-required="true" aria-invalid="false" >';

                var email='<label for="cc-payment" class="control-label mb-1">e-mail</label><input id="cc-pament" name="rmail" required="" placeholder="SHOP RENTER E-MAIL" type="email" class="form-control" aria-required="true" aria-invalid="false" >';

                var html='<label for="cc-name" class="control-label mb-1">Per-Month Rent</label><input id="cc-pament" name="pmrent" type="number" min="5000" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9]+" required="" placeholder="PER MONTH RENT" >';

                document.getElementById('display').innerHTML=name;
                document.getElementById('display1').innerHTML=contact;
                document.getElementById('display2').innerHTML=email;
                document.getElementById('display3').innerHTML=html;
            }
            else if(stype=='LEASE')
                {
                    var name='<label for="cc-payment" class="control-label mb-1">Owner</label><input id="cc-pament" name="lname" pattern="[A-Za-z/s]+" required="" placeholder="NAME OF SHOP LEASER" type="text" class="form-control" aria-required="true" aria-invalid="false" >';

                    var contact='<label for="cc-payment" class="control-label mb-1">Contact</label><input id="cc-pament" name="ltel" pattern=="/^{10}$/" required="" placeholder="LEASER CONTACT" type="tel" class="form-control" aria-required="true" aria-invalid="false" >';

                    var email='<label for="cc-payment" class="control-label mb-1">e-mail</label><input id="cc-pament" name="lmail" required="" placeholder="SHOP LEASER E-MAIL" type="email" class="form-control" aria-required="true" aria-invalid="false" >';

                    var html='<label for="cc-name" class="control-label mb-1">Total Lease</label><input id="cc-pament" name="total_lease" type="number" min="20000" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9]+" required="" placeholder="TOTAL LEASE">';

                    document.getElementById('display').innerHTML=name;
                    document.getElementById('display1').innerHTML=contact;
                    document.getElementById('display2').innerHTML=email;
                    document.getElementById('display3').innerHTML=html;
                }
        }
    </script>
    <script type="text/javascript">
        function showStartValid()
        {
            var start=parseFloat(document.getElementById('start').value);
            var occdate= "<?php echo $sdate ?>";
            
            if (occdate>start)
            {
                return true;
            }
            else
            {
               alert("Agreement Start Date should be greater than Occupation Date");
               document.getElementById('start').value='';
            }
        }
    </script>
    <script type="text/javascript">
        function showEndValid()
        {
            var end=parseFloat(document.getElementById('end').value);
            var enddate= "<?php echo $edate ?>";
            
            if (enddate>end)
            {
                return true;
            }
            else
            {
               alert("Agreement End Date should be less than Contract End Date ");
               document.getElementById('end').value='';
            }
        }
    </script>


</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
    if(isset($_POST['save']))
    {
            if($s_type=='RENT') 
            {
                $atype=mysqli_real_escape_string($con,$_POST['atype']);
                $name=mysqli_real_escape_string($con,$_POST['rname']);
                $contact=mysqli_real_escape_string($con,$_POST['rtel']);
                $mail=mysqli_real_escape_string($con,$_POST['rmail']);
                $pmrent=mysqli_real_escape_string($con,$_POST['pmrent']);
                $advance=mysqli_real_escape_string($con,$_POST['advance']);
                $agrsdate=mysqli_real_escape_string($con,$_POST['agrsdate']);
                $agredate=mysqli_real_escape_string($con,$_POST['agredate']);

                 $sql=mysqli_query($con,"INSERT INTO `shop_rent`(`shop_o_id`, `name`, `contact`, `email`, `agree_type`, `per_month_rent`, `total_lease`, `advance`, `agree_sdate`, `agree_edate`) VALUES ('$o_id','$name','$contact','$mail','$atype','$pmrent','0','$advance','$agrsdate','$agredate')") or die(mysqli_error($con));
                        if($sql)
                        {
                            echo '<script>alert("Inserted Successful"); window.location="view_rent.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="shop_rent.php"; </script>'; 
                        }
            }
            else
            {
                $atype=mysqli_real_escape_string($con,$_POST['atype']);
                $name=mysqli_real_escape_string($con,$_POST['lname']);
                $contact=mysqli_real_escape_string($con,$_POST['ltel']);
                $mail=mysqli_real_escape_string($con,$_POST['lmail']);
                $total_lease=mysqli_real_escape_string($con,$_POST['total_lease']);
                $advance=mysqli_real_escape_string($con,$_POST['advance']);
                $agrsdate=mysqli_real_escape_string($con,$_POST['agrsdate']);
                $agredate=mysqli_real_escape_string($con,$_POST['agredate']);
             $sql=mysqli_query($con,"INSERT INTO `shop_rent`(`shop_o_id`, `name`, `contact`, `email`, `agree_type`, `per_month_rent`, `total_lease`, `advance`, `agree_sdate`, `agree_edate`) VALUES ('$o_id','$name','$contact','$mail','$atype','0','$total_lease','$advance','$agrsdate','$agredate')") or die(mysqli_error($con));
                        if($sql)
                        {
                            echo '<script>alert("Inserted Successful"); window.location="view_rent.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="shop_rent.php"; </script>'; 
                        }
            }
        }

?> 