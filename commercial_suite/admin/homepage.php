<?php include 'session.php';
      include 'con_db.php';
 ?>
<!DOCTYPE html>
<head>
<title>Homepage</title>
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
<div id="billModal" class="modal fade">
                    <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <!-- <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Bill Details</h4>
                        </div> -->
                        <div class="modal-body" id="modal_body">
                          
                        </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                        </div> -->
                      </div>

                    </div>
                  </div>
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
        <div class="row">
                            <div class="col-md-12"></div>
                        </div>
        <div class="row">

                            <div class="col-lg-3"></div>
            <div class="col-md-3 market-update-gd" >
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right" >
                        <i class="fa fa-building-o" style="font-size:60px;color: #fff;"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h1 style="color: #fff;"><?php $sr=mysqli_query($con,"SELECT COUNT(*) FROM shops");
                                                        $rows=mysqli_fetch_array($sr);
                                                        echo $rows[0];
                                                 ?></h1>
                                                <h3>Total Shops</h3>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-user" style="font-size:60px;color: #fff;"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                    <h1 style="color: #fff;"><?php $sr=mysqli_query($con,"SELECT COUNT(*) FROM apartment_staff");
                                                        $rows=mysqli_fetch_array($sr);
                                                        echo $rows[0];
                                                 ?></h1>
                                                <h3>Total Staffs</h3>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            </div>
             <div class="row">
                            <div class="col-md-12"></div>
                        </div>

            <div class="row">

                            <div class="col-lg-2"></div>

            <div class="col-md-3 market-update-gd" style="height: 200px;margin-top: 20px;">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right" >
                        <i class="fa fa-institution" style="font-size:50px;color: #fff;"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h1 style="color: #fff;"><?php $sr=mysqli_query($con,"SELECT COUNT(*) FROM shops,shop_owners where shops.shop_id=shop_owners.shop_id and shop_owners.shop_type='LEASE'");
                                                        $rows=mysqli_fetch_array($sr);
                                                        echo $rows[0];
                                                 ?></h1>
                                                <h3>Number of Leased Shops</h3>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
          
            <div class="col-md-3 market-update-gd" style="height: 200px;margin-top: 20px;">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right" >
                        <i class="fa fa-institution" style="font-size:50px;color: #fff;"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h1 style="color: #fff;"><?php $sr=mysqli_query($con,"SELECT COUNT(*) FROM shops,shop_owners where shops.shop_id=shop_owners.shop_id and shop_owners.shop_type='RENT'");
                                                        $rows=mysqli_fetch_array($sr);
                                                        echo $rows[0];
                                                 ?></h1>
                                                <h3>Number of Rented Shops</h3>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>

            <div class="col-md-3 market-update-gd" style="height: 200px;margin-top: 20px;">
                <div class="market-update-block clr-block-5">
                    <div class="col-md-4 market-update-right" >
                        <i class="fa fa-institution" style="font-size:50px;color: #fff;"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h1 style="color: #fff;"><?php $sr=mysqli_query($con,"SELECT COUNT(*) FROM shops,shop_owners where shops.shop_id=shop_owners.shop_id and shop_owners.shop_type='OWNED'");
                                                        $rows=mysqli_fetch_array($sr);
                                                        echo $rows[0];
                                                 ?></h1>
                                                <h3>Number of Owned Shops</h3>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            </div>


             <div class="row">
                            <div class="col-md-12"></div>
                        </div>
                        <br>
                        <br>
        <div class="row">

                            <div class="col-lg-3"></div>
          
            <div class="col-md-3 market-update-gd" style="height: 200px;margin-top: 20px;">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-3 market-update-right">
                        <i class="fa fa-file-o"  style="font-size:50px;color: #fff;"></i>
                    </div>
                    <div class="col-md-9 market-update-left">
                        <h1 style="color: #fff;"><?php $sr=mysqli_query($con,"SELECT per_sq_feet_charge FROM maintenance");
                                                        $rows=mysqli_fetch_array($sr);
                                                        echo 'Rs. '.$rows[0];
                                                 ?></h1>
                                                <h3>Sq Feet Rate</h3>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd" style="height: 200px;margin-top: 20px;">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-3 market-update-right">
                        <i class="fa fa-inr" style="font-size:60px;color: #fff;"></i>
                    </div>
                    <div class="col-md-9 market-update-left">
                                                <h1 style="color: #fff;"><?php 
                                                    $m=date('m');
                                                    $sr=mysqli_query($con,"SELECT COUNT(*) FROM maintenance_bill WHERE month(bill_date)='$m' and maintenance_status='generated'");
                                                    $rw=mysqli_num_rows($sr);
                                                    $rws=mysqli_fetch_array($sr);
                                                    $row=$rws[0];
                                                    if($row<=0 )
                                                    {
                                                        echo 'No Entries';
                                                    }else
                                                    {
                                                        $rw=mysqli_query($con,"SELECT SUM(total_amt) FROM maintenance_bill WHERE month(bill_date)='$m' and maintenance_status='generated'");
                                                        $rows=mysqli_fetch_array($rw);
                                                        echo 'Rs. '.$rows[0];
                                                        ?>
                                                <h3>Current Month Total</h3>
                                                   <?php  }
                                                 ?></h1>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            </div>
           <div class="clearfix"> </div>
        </div>  
        <!-- //market-->
        
        
        
            <div class="clearfix"> </div>
        
            <!-- tasks -->
        
        <!-- //tasks -->
        
                    <div class="clearfix"> </div>
                
</section>
    
<script>
    function getChange() {
    
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal_body").innerHTML=this.responseText;
      
    }
  }
  xmlhttp.open("GET","setting.php",true);
  xmlhttp.send();
}
</script>

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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
