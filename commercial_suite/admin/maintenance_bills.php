<?php 
    include 'con_db.php';
    include 'session.php'; 
    $bd=date('Y-m-d'); 
    $startDate = date('Y-m-1',strtotime($bd));
    $prevMonth = date('F', strtotime("last month", strtotime($startDate)));
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
                    <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                               <a href="view_bill.php" class="btn btn-info" title="View Bill Information"><i class="fa fa-eye"></i>Bill Info</a>
                           </div>
                </div>
                <br>
        <div class="row">
            <div class="col-lg-12">
                    <section>
                        <h1 style="text-align: center;">
                            Maintenance Bill Details
                        </h1>
                        <div class="panel-body">
                               <form action="" method="post" enctype="multipart/form-data">   

                                        <div class="row">
                                        <div class="col-lg-2"></div>
                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Shop Number</label>
                                                <select name="shop" onchange="showshopname(this.value)"  class="form-control" required="">
                                                    <option value="">Select Shop no</option>
                                                    <?php $sr=mysqli_query($con,"SELECT * FROM shops WHERE shop_status='allocated' and shop_no NOT IN ( SELECT shop_no FROM maintenance_bill where month='$prevMonth')order by shop_no asc"); 
                                                        while($rw=mysqli_fetch_array($sr))
                                                        {
                                                    ?>    
                                                    <option value="<?php echo $rw['shop_id'].'--'.$rw['shop_no']; ?>" ><?php echo $rw['shop_no']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-lg-3">
                                            <div class="form-group">    
                                                <?php $qr=mysqli_query($con,"SELECT bill_no FROM maintenance_bill ORDER BY bill_no DESC");
                                                  $rw=mysqli_num_rows($qr); $read=mysqli_fetch_array($qr);
                                                  if($rw>0)
                                                  {
                                                    $billno=$read['bill_no'];
                                                    $bill_no=++$billno;
                                                  }
                                                  else
                                                  {
                                                    $bill_no='18001';
                                                  }
                                             ?>
                                                <label for="cc-payment" class="control-label mb-1">Bill No</label>
                                                <input id="cc-pament" name="bid" value="<?php echo $bill_no; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly="">
                                            </div>
                                            </div>

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Bill Date</label>
                                                <input id="cc-pament" name="bdate" required="" type="date" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d') ?>" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Month</label>
                                               
                                                <input id="cc-pament" name="month" required="" type="text" value="<?php echo $prevMonth ?>" class="form-control" aria-required="true" aria-invalid="false" readonly>
                                            </div>
                                            </div>

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Shop Name</label>
                                                <input name="sname" readonly="" id="shopname" type="text" class="form-control" aria-required="true" aria-invalid="false"  placeholder="SHOP NAME">
                                            </div>
                                            </div> 

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Total Area</label>
                                                <input id="total_area" name="area"  type="text" class="form-control" aria-required="true" aria-invalid="false" readonly placeholder="TOTAL AREA">
                                            </div>
                                            
                                        </div>
                                        </div>


                                       
                                     <div class="row">
                                        <div class="col-lg-2"></div>

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <?php $qr=mysqli_query($con,"SELECT per_sq_feet_charge FROM maintenance");
                                                   $read=mysqli_fetch_array($qr);
                                                   $per_sq_feet=$read['per_sq_feet_charge'];
                                                  ?>
                                                <label for="cc-payment" class="control-label mb-1">Per sq.ft</label>
                                                <input id="sq-ft" name="sqft"  type="text" value="<?php echo $per_sq_feet; ?>" class="form-control" aria-required="true" aria-invalid="false" readonly>
                                            </div>
                                        </div>
                                            <div class="col-lg-3">
                                            <div class="form-group">
                                               <label for="cc-payment" class="control-label mb-1">New Electricity Reading</label>                                     
                                                <input id="newelec" name="neread"  type="text" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9.]+" required="" placeholder="NEW ELECTRICITY READING">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                               <label for="cc-payment" class="control-label mb-1">Old Electricity Reading</label>                                     
                                                <input id="oldelec" name="oeread" onchange="showTotalread();" type="text" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9.]+" required="" placeholder="OLD ELECTRICITY READING">
                                            </div>
                                        </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-lg-2"></div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Total Reading</label>
                                                <input id="tot_read" name="tread" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly  placeholder="TOTAL READING">
                                            </div>
                                            </div>

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Maintenance Charge</label>
                                                <input id="maintenance" name="mcharge" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly placeholder="MAINTENANCE CHARGE">
                                            </div>
                                            </div>
                                        
                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Electricity  Charge</label>
                                                <input id="echarge" name="echarge" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="ELECTRICITY CHARGE">
                                            </div>
                                            </div>
                                        </div>
                                          
                                        <div class="row">
                                        <div class="col-lg-2"></div>
                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Water Charge</label>
                                                <input id="wcharge" name="wcharge" type="text" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9]+" required="" placeholder="WATER CHARGE">
                                            </div>
                                            </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Other Charge</label>
                                                <input id="ocharge" name="ocharge" type="text" onchange="showAmount();" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9.]+" required="" placeholder="OTHER CHARGE">
                                            </div>
                                            </div>

                                            <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Old Amount</label>
                                                <input id="oamt" name="oamt" type="text" value="0" class="form-control" aria-required="true" aria-invalid="false" readonly="" placeholder="OLD AMOUNT">
                                                <input type="hidden" name="pay_id" id="pay_id" >
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-2"></div>
                                            <div class="col-lg-9">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Total Amount</label>
                                                <input id="tot_amt" name="tamt"  type="text" class="form-control" aria-required="true" aria-invalid="false" readonly="" placeholder="TOTAL AMOUNT">
                                            </div>
                                            </div>

                                        <div class="col-lg-4">
                                            
                                            </div>
                                        </div>

                                            <div class="row">
                                        <div class="col-lg-3"></div>
                                         <div class="col-lg-6">
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
        function showTotalread()
        {
            var oldelec=parseFloat(document.getElementById('oldelec').value);
            var newelec=parseFloat(document.getElementById('newelec').value);
            var total_area=parseFloat(document.getElementById('total_area').value);
            var sqft=parseFloat(document.getElementById('sq-ft').value);
            var maintenance=total_area * sqft;
            document.getElementById('maintenance').value=maintenance;
            if (oldelec<newelec)
            {
            var tot_read=newelec - oldelec;
            document.getElementById('tot_read').value=tot_read;
            }
            else
            {
               alert("current reading should be greater than old reading");
               document.getElementById('newelec').value='';
               document.getElementById('oldelec').value='';
            }
        }
    </script>
    <script type="text/javascript">
        function showAmount()
        {
            var maintenance=parseFloat(document.getElementById('maintenance').value);
            var echarge=parseFloat(document.getElementById('echarge').value);
            var wcharge=parseFloat(document.getElementById('wcharge').value);
            var ocharge=parseFloat(document.getElementById('ocharge').value);
            var old_amt=parseFloat(document.getElementById('oamt').value);
            var tot_bill=maintenance + echarge + wcharge + ocharge + old_amt;
            document.getElementById('tot_amt').value=tot_bill;
        } 
    </script>
    <script>
        function showshopname(id) {

          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              var vals=this.responseText;
              var arr=vals.split("|");
              document.getElementById('shopname').value=arr[0];
              document.getElementById('total_area').value=arr[1];
              document.getElementById('oamt').value=arr[2];
              document.getElementById('pay_id').value=arr[3];
            }
          }
           xmlhttp.open("GET","showshopname.php?id="+id,true);
          xmlhttp.send();
        }
    </script>
</body>

</html>
<!-- end document-->

<?php 
    if(isset($_POST['save']))
    {
            $shop=explode('--',$_POST['shop']);
            $shopid=$shop[0];
            $shopno=$shop[1];
            $bid=mysqli_real_escape_string($con,$_POST['bid']);
            $bdate=mysqli_real_escape_string($con,$_POST['bdate']);
            $sname=mysqli_real_escape_string($con,$_POST['sname']);
            $area=mysqli_real_escape_string($con,$_POST['area']);
            $sqft=mysqli_real_escape_string($con,$_POST['sqft']);
            $neread=mysqli_real_escape_string($con,$_POST['neread']);
            $oeread=mysqli_real_escape_string($con,$_POST['oeread']);
            $tread=mysqli_real_escape_string($con,$_POST['tread']);           
            $mcharge=mysqli_real_escape_string($con,$_POST['mcharge']);
            $echarge=mysqli_real_escape_string($con,$_POST['echarge']);
            $wcharge=mysqli_real_escape_string($con,$_POST['wcharge']);
            $ocharge=mysqli_real_escape_string($con,$_POST['ocharge']);
            $oamt=mysqli_real_escape_string($con,$_POST['oamt']);
            $tamt=mysqli_real_escape_string($con,$_POST['tamt']);
            $pay_id=mysqli_real_escape_string($con,$_POST['pay_id']);
            $month=mysqli_real_escape_string($con,$_POST['month']);
            $m=date('m');
            $selqry=mysqli_query($con,"SELECT * FROM maintenance_bill WHERE shop_id='$shopid' and month(bill_date)='$m'");
        $count=mysqli_num_rows($selqry);
         
          if($count==0)
          {
            $sql=mysqli_query($con,"INSERT INTO `maintenance_bill`(`shop_id`,`bill_no`, `bill_date`,`month`, `shop_no`, `shop_name`, `total_area`, `per_sq_feet`, `ele_new_read`, `ele_old_read`, `total_read`, `maintenance_charge`, `ele_charge`, `water_charge`, `other_charge`, `old_bal`, `total_amt`, `maintenance_status`) VALUES ('$shopid','$bid','$bdate','$month','$shopno','$sname','$area','$sqft','$neread','$oeread','$tread','$mcharge','$echarge','$wcharge','$ocharge','$oamt','$tamt','generated')");
                        if($sql)
                        {
                            $up=mysqli_query($con,"UPDATE payment SET balance='0' where pay_id='$pay_id'");
                            echo '<script>alert("Inserted Successful"); window.location="view_bill.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="maintenance_bills.php"; </script>'; 
                        }

            }
           else
           {
             echo '<script>alert("Bill record already exists"); window.location="maintenance_bills.php"; </script>'; 
           }
           

        } 
        



?>