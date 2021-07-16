<?php 
    include 'con_db.php';
    include 'session.php'; 
    $o_id=$_GET['id'];
    $qry=mysqli_query($con,"SELECT * FROM shop_owners WHERE shop_o_id='$o_id'") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
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
                    <section >
                        <h1 style="text-align: center;">
                            Shop Owner Details
                        </h1>
                        <div class="panel-body">
                                         <form action="" method="post" enctype="multipart/form-data">   

                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Shop Name</label>
                                                <input id="cc-pament" name="sname" type="text" class="form-control" value="<?php echo $row['shop_name']; ?>" aria-required="true" aria-invalid="false" pattern="[A-Za-z\s]+">
                                            </div>
                                            </div> 

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Shop Type</label>
                                                <select name="type" class="form-control" >
                                                    <option value="<?php echo $row['shop_type']; ?>"><?php echo $row['shop_type']; ?></option>    
                                                    <option value="AC">AC</option>                                                    
                                                    <option value="Non AC">Non AC</option>
                                                </select>
                                            </div>
                                            </div>

                                             <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Owner</label>
                                                <input id="cc-pament" name="oname" type="text" pattern="[A-Za-z\s]+" class="form-control" value="<?php echo $row['owner']; ?>" aria-required="true" aria-invalid="false" >
                                            </div>
                                         </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Contact</label>
                                                <input id="cc-pament" name="otel" pattern="^\d{10}$" required="" type="tel" class="form-control" value="<?php echo $row['owner_contact']; ?>" aria-required="true" aria-invalid="false"  >
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">e-mail</label>
                                                <input id="cc-pament" name="omail" type="email" class="form-control" value="<?php echo $row['email']; ?>" aria-required="true" aria-invalid="false" >
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Shop Category</label>
                                                <select name="scat" class="form-control">
                                                    <option value="<?php echo $row['shop_cat']; ?>"><?php echo $row['shop_cat']; ?></option>    
                                                    <option value="office">Office</option>                                                
                                                    <option value="Grocery Shop">Grocery Shop</option>                                  
                                                    <option value="Saloon">Saloon</option>  
                                                </select>
                                            </div>
                                            </div>
                                        </div>


                                       <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Occupation Date</label>
                                                <input id="cc-pament" name="odate" type="date" class="form-control" value="<?php echo $row['occ_date']; ?>" aria-required="true" aria-invalid="false" >
                                            </div>
                                            </div>

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Contract End Date</label>
                                                <input id="cc-pament" name="edate" type="date" class="form-control" value="<?php echo $row['con_enddate']; ?>" aria-required="true" aria-invalid="false" >
                                            </div>
                                            </div>

                                            <div class="col-lg-3">                                    
                                            <div class="form-group" >
                                                <label for="cc-number" class="control-label mb-1">Deal Info</label>
                                                <textarea id="cc-number" required="" name="dinfo" class="form-control cc-number identified visa"> <?php echo $row['shop_desc']; ?></textarea>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                         </div>
                                        </div>

                                                <div class="row">
                                        <div class="col-lg-3"></div>
                                         <div class="col-lg-6">
                                                <button id="Change-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update</span>
                                                </button>
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
   </body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
    if(isset($_POST['save']))
    {
            $stype=mysqli_real_escape_string($con,$_POST['type']);
            $sname=mysqli_real_escape_string($con,$_POST['sname']);
            $oname=mysqli_real_escape_string($con,$_POST['oname']);
            $tel=mysqli_real_escape_string($con,$_POST['otel']);
            $mail=mysqli_real_escape_string($con,$_POST['omail']);
            $cat=mysqli_real_escape_string($con,$_POST['scat']);
            $odate=mysqli_real_escape_string($con,$_POST['odate']);
            $edate=mysqli_real_escape_string($con,$_POST['edate']);
            $dinfo=mysqli_real_escape_string($con,$_POST['dinfo']);        

             $sql=mysqli_query($con,"UPDATE `shop_owners` SET `shop_type`='$stype',`shop_name`='$sname',`owner`='$oname',`owner_contact`='$tel',`email`='$mail',`shop_cat`='$cat',`occ_date`='$odate',`shop_desc`='$dinfo',`con_enddate`='$edate' WHERE shop_o_id='$o_id'");
                        if($sql)
                        {
                            echo '<script>alert("Updated Successfully"); window.location="view_owner.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="up_shopowner.php"; </script>'; 
                        }
         }
        



?>