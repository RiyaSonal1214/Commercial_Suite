<?php 
    include 'con_db.php';
    include 'session.php'; 
    $qry=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
    $count=mysqli_num_rows($qry);
    $apid=$row['apartment_id'];
    $tot_floor=$row['num_floor']; 
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
<body style="background-image:url('images/rohan/7.jpg');color:333;">
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
                               <a href="view_shop.php" class="btn btn-info" title="View Shop Information"><i class="fa fa-eye"></i>Shop Info</a>
                           </div>
                </div>
                <br>
        <div class="row">
            <div class="col-lg-12">
                    <section>
                        <h1 style="text-align: center;">
                            Shop Details
                        </h1>
                        <div class="panel-body">
                               <form role="form" action="" method="post">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Floor Number</label>
                                                <select name="floor" id="floor" class="form-control" required=""  onchange="showNumber(this.value)" onclick="showPurCharge(this.value)">
                                                    <?php  
                                                    if ($tot_floor=='')
                                                    {?>
                                                    <option value="<?php echo "apartment info not available"; ?>"><?php echo "apartment info not available"; ?> </option>
                                                    <?php } else 
                                                    { ?>
                                                    <option value="">select the floor</option> 
                                                    <?php
                                                    $i=0;
                                                    while($i<$tot_floor)
                                                    { 
                                                    ?> 
                                                    <option value="<?php echo $i; ?>"><?php echo $i++; ?></option>
                                                    <?php } ?>
                                                    ?>                                                    
                                                    <?php } ?>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                
                                                <label for="cc-payment" class="control-label mb-1">Shop Number</label>
                                                <input id="shno" name="shno" type="text" class="form-control" aria-required="true" placeholder="SHOP NUMBER" aria-invalid="false" readonly="">
                                            </div>
                                            <div class="form-group">                              
                                                <label for="cc-payment" class="control-label mb-1">Sq.Feet Purchase Charge</label>
                                                <input id="pcharge" name="pur_charge" pattern="[0-9.]+" required="" placeholder="SQ. FFEET CHARGE"  type="number" min="20" class="form-control" aria-required="true" aria-invalid="false" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Sq.Feet</label>
                                                <input id="area" name="sq_feet" pattern="[0-9.]+" required="" placeholder="AREA OF SHOP" type="number" min="20" class="form-control" aria-required="true" aria-invalid="false" onchange="showTotCost();">
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Total Cost</label>
                                                <input id="tcost" name="cost"  pattern="[0-9.]+" required="" placeholder="SHOP COST" type="number" min="50000" class="form-control" aria-required="true" aria-invalid="false" readonly="">
                                            </div>
                                           
                                            <div>
                                                <button id="Change-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save</span>
                                                </button>
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

    <script>
        function showNumber(floor) {

          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById('pcharge').value=this.responseText;
              var vals=this.responseText;
              var arr=vals.split("|");
              document.getElementById('shno').value=arr[0];
              document.getElementById('pcharge').value=arr[1];
            }
          }
           xmlhttp.open("GET","shownumber.php?floor="+floor,true);
          xmlhttp.send();
        }
    </script>

    

    <script type="text/javascript">
        function showTotCost()
        {
            var pur_charge=parseFloat(document.getElementById('pcharge').value);
            var area=parseFloat(document.getElementById('area').value);
            var tot_cost=pur_charge * area;
            document.getElementById('tcost').value=tot_cost;
        }
    </script>
    


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
            $fnum=mysqli_real_escape_string($con,$_POST['floor']);
            $snum=mysqli_real_escape_string($con,$_POST['shno']);

            $sqft=mysqli_real_escape_string($con,$_POST['sq_feet']);
            $tcost=mysqli_real_escape_string($con,$_POST['cost']);

            $qry=mysqli_query($con,"SELECT * FROM floor WHERE floor_no='$fnum'") or die(mysqli_error($con));
            $row=mysqli_fetch_array($qry);
            $count=mysqli_num_rows($qry);
            if($count >0)
            {
                $sel=mysqli_query($con,"SELECT * FROM floor where floor_no='$fnum'");
                $fetch=mysqli_fetch_array($sel);
                $tot_shops=$fetch['total_shop'];
                // $col=mysqli_num_rows($sel);

                $selqry=mysqli_query($con,"SELECT * FROM shops WHERE floor='$fnum'");
                $count=mysqli_num_rows($selqry);

                $sel=mysqli_query($con,"SELECT * FROM shops WHERE shop_no='$snum'");
                $row=mysqli_num_rows($sel);                        

                // if($col==0)
                // {
                if($count<$tot_shops)
                {
                 if($row==0)
                 {
                  $sql=mysqli_query($con,"INSERT INTO `shops`( `apartment_id`, `floor`, `shop_no`, `sq-feet`, `shop_cost`, `shop_status`) VALUES ('$apid','$fnum','$snum','$sqft','$tcost','available')");
                            if($sql)
                            {
                                 echo '<script>alert("Inserted Successful"); window.location="view_shop.php"; </script>';
                            }
                            else
                            {
                               echo '<script>alert("Failed"); window.location="manage_shop.php"; </script>'; 
                            }
                  }
                  else
                  {
                    echo '<script>alert("shop already exists"); window.location="view_shop.php"; </script>';
                  }
             }
             elseif($count==$tot_shops)
             {
                $up=mysqli_query($con,"UPDATE floor SET floor_status='full' where floor_no='$fnum'");
              echo '<script>alert("Floor capacity is full"); window.location="manage_shop.php"; </script>';  
             }
        }
        else
        {
            echo '<script>alert("floor record doesnot exists"); window.location="view_floor.php";</script>';
        }

     }
        



?>