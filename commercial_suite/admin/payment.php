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
                               <a href="view_payment.php" class="btn btn-info" title="View Payment Information"><i class="fa fa-eye"></i>Payment Info</a>
                           </div>
                </div>
                <br>
        <div class="row">
            <div class="col-lg-12">
                    <section>
                        <h1 style="text-align: center;">
                            Payment Details
                        </h1>
                        <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">   

                                        <div class="row">
                                        <div class="col-lg-2"></div>
                                            <div class="col-lg-3">
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Shop Number</label>
                                                <select name="shopno" class="form-control" onchange="showTotAmt(this.value)" required="">
                                                    <option>Select Shop no</option>
                                                    <?php $sr=mysqli_query($con,"SELECT * FROM shops,shop_owners,maintenance_bill WHERE shops.shop_id=shop_owners.shop_id and maintenance_bill.shop_id=shops.shop_id and maintenance_bill.maintenance_status='generated'  order by maintenance_bill.shop_no asc"); 
                                                        while($rw=mysqli_fetch_array($sr))
                                                        {
                                                    ?>    
                                                    <option value="<?php echo $rw['shop_id'].'--'.$rw['shop_type'];; ?>"><?php echo $rw['shop_no'].'--'.$rw['shop_type']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="hidden" name="" id="shopid">
                                            </div>
                                            </div>

                                            <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Month</label>
                                                
                                                <input id="month" name="month" required="" type="text" value="<?php echo $prevMonth ?>" class="form-control" aria-required="true" aria-invalid="false" readonly>
                                            </div>
                                            </div>

                                         <div class="col-lg-3">
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Pay Type</label>
                                                <select name="pay_type" id="pay_type" onchange="showbillamount(this.value)" class="form-control" required="">
                                                    <option value="">Select Payment Type</option>
                                                </select>
                                            </div>    
                                            </div>
                                            </div>


                                        <div class="row"> 

                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Total AMOUNT</label>
                                                <input id="tamt" name="tamt" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly="" pattern="[0-9]+" placeholder="TOTAL PAYABLE AMOUNT">
                                            </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Paying Amount</label>
                                                <input id="paid_amt" name="paid_amt" pattern="[0-9]+" required="" placeholder="PAYING AMOUNT" type="text" class="form-control" aria-required="true" aria-invalid="false" onchange="showAmt(this.value)">
                                            </div>
                                            </div>
                                            </div>
                                       

                                            <div class="row">
                                        <div class="col-lg-2"></div>
                                         <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Balance</label>
                                                <input id="bal" name="bal"  pattern="[0-9]+" required="" placeholder="BALANCE AMOUNT" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly="">
                                            </div>
                                            </div>
                                             
 
                                         <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Paid Date</label>
                                                <input id="cc-pament" name="pdate" type="date" required="" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d') ?>">
                                            </div>
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
        function showAmt()
        {
            var tamt=parseFloat(document.getElementById('tamt').value);
            var paid_amt=parseFloat(document.getElementById('paid_amt').value);
            if(tamt < paid_amt)
            {
                document.getElementById('paid_amt').value='';
                document.getElementById('bal').value='';
            }
            else
            {
            var bal=tamt-paid_amt;
            document.getElementById('bal').value=bal;
            }
        }
    </script>

    <script>
        function showTotAmt(val) {

            var vall=val.split('--');
            var shopid=vall[0];
            var stype=vall[1];

          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById('pay_type').innerHTML=this.responseText;
              document.getElementById('shopid').value=shopid;
            }
          }
           xmlhttp.open("GET","showtotal.php?shopid="+shopid+"&&stype="+stype,true);
          xmlhttp.send();
        }


        function showbillamount(type) { 
            var shopid=document.getElementById('shopid').value;
            var date=document.getElementById('month').value;
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById('tamt').value=this.responseText;
            }
          }
           xmlhttp.open("GET","showbillamt.php?shopid="+shopid+"&&type="+type+"&&date="+date,true);
          xmlhttp.send();
        }
    </script>

</body>

</html>
<!-- end document-->
<?php 
    if(isset($_POST['save']))
    {
            $shid=explode('--', $_POST['shopno']);
            $stype=$shid[1];
            $snum=$shid[0];
            $pay_type=mysqli_real_escape_string($con,$_POST['pay_type']);
            $month=mysqli_real_escape_string($con,$_POST['month']);
            $tamt=mysqli_real_escape_string($con,$_POST['tamt']);
            $paid_amt=mysqli_real_escape_string($con,$_POST['paid_amt']);
            $bal=mysqli_real_escape_string($con,$_POST['bal']);
            $pdate=mysqli_real_escape_string($con,$_POST['pdate']);

            $selqry=mysqli_query($con,"SELECT * FROM shop_owners,shops WHERE shops.shop_id='$snum' and shops.shop_id=shop_owners.shop_id");
            $row=mysqli_fetch_array($selqry);
            $sid=$row['shop_o_id'];

            $query=mysqli_query($con,"SELECT * FROM payment WHERE shop_o_id='$sid' and paid_for='$pay_type' and paid_month='$month'");
            $count=mysqli_num_rows($query);
            if($count<=0)
            {
             
             $sql=mysqli_query($con,"INSERT INTO `payment`( `shop_o_id`, `paid_month`, `paid_for`, `paid_amt`, `balance`, `paid_date`, `pay_status`) VALUES ('$sid','$month','$pay_type','$paid_amt','$bal','$pdate','paid')");
                        if($sql)
                        {
                            $up=mysqli_query($con,"UPDATE maintenance_bill SET maintenance_status='paid' where shop_id='$snum'");
                            echo '<script>alert("Inserted Successful"); window.location="view_payment.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="payment.php"; </script>'; 
                        }
         }
         else
         {
          echo '<script>alert("Payment Detail already present"); window.location="view_payment.php"; </script>';  
         }

     } 
        



?>