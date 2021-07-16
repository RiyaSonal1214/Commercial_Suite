<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php include 'session.php';
         include 'con_db.php';
         $id = $_GET['id'];
         $query= mysqli_query($con,"SELECT * FROM `maintenance_bill` WHERE `mbill_id`='$id'");
         $qr=mysqli_fetch_array($query);

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
      <!--//banner -->
      <!-- short -->
      <br><br><br><br>
      
      <!-- //short-->
      <!--show Now-->  
       <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
           
        <div class="container" style="margin-left: 260px;" >
          <div id='DivIdToPrint'>
          <div class="row col-md-11">
          <center>
              <table class="table table-bordered" style="background-color: white; color: #000;">
                  <thead>
                    <tr>
                      <th colspan="3"><h2 style="text-align: center; text-decoration: underline;">Maintenance Bill</h2></th> 
                    </tr>
                    <tr>
                      <th colspan="2" style="text-align: left;">Bill No: <?php echo $qr['bill_no'];?></th>
                      <th style="text-align: right;">Date: <?php echo date('d-m-Y',strtotime($qr['bill_date']));?></th>
                    </tr>
                    <tr>
                      <th colspan="2"  style="text-align: left">Month: <?php echo $qr['month'];?></th>
                      <th rowspan="2" style="text-align: right;">Shop No. <?php echo $qr['shop_no'];?></th>
                    </tr>
                    <tr>
                      <th colspan="2" style="text-align: left;">Shop Name: <?php echo $qr['shop_name'];?></th>
                    </tr>
                    <tr>
                      <th style="text-align: left;">Total Area: <?php echo $qr['total_area'];?></th>
                      <th rowspan="2">MAINTENANCE CHARGE</th>
                      <th rowspan="2" style="text-align: right;"><?php echo $qr['maintenance_charge'];?></th>
                    </tr>
                    <tr>
                      <th style="text-align: left;">Rate/sqft: <?php echo $qr['per_sq_feet'];?></th>
                    </tr>
                    <?php include("con_db.php");
                     $query= mysqli_query($con,"SELECT * FROM `maintenance_bill` WHERE `mbill_id`='$id'");
                     $row = mysqli_fetch_array($query);
                  ?>
                    <tr>
                      <th style="text-align: left;">Electricity New Reading: <?php echo $row['ele_new_read']; ?></th>
                      <th rowspan="3">ELECTRICITY CHARGE</th>
                      <th rowspan="3" style="text-align: right;"><?php echo $row['ele_charge']; ?></th>
                    </tr>
                    <tr>
                      <th style="text-align: left;">Electricity Old Reading: <?php echo $row['ele_old_read']; ?></th>
                    </tr>
                    <tr>
                      <th style="text-align: left;">Total Reading: <?php echo $row['total_read'];?></th>
                    </tr>
                    <tr>
                      <th rowspan="4" style="text-align: left;">OTHER CHARGES</th>
                      <th>WATER CHARGES</th>
                      <th style="text-align: right;"><?php echo $row['water_charge']; ?></th>
                    </tr>
                    <tr>
                      <th>OTHER CHARGES</th>
                      <th style="text-align: right;"><?php echo $row['other_charge']; ?></th>
                    </tr>
                    <tr>
                      <th>OLD BALANCE</th>
                      <th style="text-align: right;"><?php echo $row['old_bal']; ?></th>
                    </tr>
                    <tr>
                      <th>TOTAL AMOUNT</th>
                      <th style="text-align: right;"><?php echo $row['total_amt']; ?></th>
                    </tr>
                    <td colspan="3" style="text-align:left;"><b><?php 
                      $inwrd = $row['total_amt'];
                      echo 'In Words: ';  echo getIndianCurrency($inwrd). ' only'; ?></b></td>
                      
                      </tr>
                      <tr>
                         <td colspan="3" style="text-align: center;"><h4><b>Wishing you a happy day</b></h4></td>
                      </tr>
                      <tr>
                         <td colspan="2"><u><b>Note</b></u><br>
                         <ol type="1)">
                           <li>Request you to pay before 15th of every month</li>
                         </ol></b></td>
                         <th style="text-align: right;">
                            <br><br><br>
                            ______________________<br>

                            Manager
                         </th>
                      </tr>
                  </thead>
              </table>
          </center>  
         </div>
         </div>
         <center>
         <div class="row">
            <div class="col-md-12 pull-right">
               <input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'><a href="view_bill.php?mbill_id=<?php echo $id; ?>" class="btn btn-warning btn-sm">Back</a>
            </div>
         </div>
         </center>
      
      </div>
      </div>
      </section>
      
       <?php

function getIndianCurrency($number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'rupees ' : '') . $paise;
}
    ?>

   <script>
          function printDiv() 
          {
            var divToPrint=document.getElementById('DivIdToPrint');

               var htmlToPrint = '<head><title></title><style media="print" >tr {page-break-inside: avoid!important;} table{border: 5px solid black;} table{border-collapse: collapse; width:100%; } </style></head><body>';

              htmlToPrint += divToPrint.outerHTML;
              newWin = window.open("");
              newWin.document.write(htmlToPrint);
              newWin.focus();
              newWin.print();
            
            setTimeout(function() {
                newWin.close();
                            }, 100);

             
          }
          </script>
         </div>
      </section>
      <!-- //show Now-->
      <!--subscribe-address-->
     
      <!--//subscribe-address-->
      
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p>Copyright © 2019 Commercial Suite. All rights reserved. Designed by Riya & Sithara.</p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
     
      <!-- //Modal 1-->
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