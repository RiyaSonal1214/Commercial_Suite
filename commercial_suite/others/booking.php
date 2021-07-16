<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    include 'con_db.php';
    include 'session.php'; 
    $qry=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
    $count=mysqli_num_rows($qry);
    $apid=$row['apartment_id'];
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
                            Book Details
                        </h1>
                        <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <div class="form-group">
                            <label>Booked By</label>
                            <input type="text" class="form-control" name="name" required="" pattern="[A-Za-z\s]+" placeholder="BOOKED BY">
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <?php $date=date('Y-m-d');
                            $valdate=date('Y-m-d',strtotime($date.'+5 days'));
                            $vlidate=date('Y-m-d',strtotime($date.'+2 month'));?>
                            <div class="form-group">
                            <label>Book For</label>
                            <input type="date" class="form-control" name="bookfor" id="date" required="" min="<?php echo $valdate ?>" max="<?php echo $vlidate;?>" pattern="[A-Za-z\s]+">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Timing</label>
                                <select class="form-control" name="ftm" id="ftm" onchange="getmsg()">
                                    <option>select time</option>
                                    <option value="1" >MORNING (07:00 TO 12:00)</option>
                                    <option value="2" >AFTERNOON(01:00 TO 5:00)</option>
                                    <option value="3">NIGHT (06:00 TO 12:00)</option>
                                </select>                                
                                <p style="color:red;" id="dismsg"></p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <div class="form-group">
                            <label>Event</label>
                            <input type="text" class="form-control" name="event" required="" pattern="[A-Za-z\s]+" placeholder="ENTER EVENT NAME">
                            </div>
                        </div>
                        <div class="col-lg-4">
                    <div class="form-group">
                        <label>Book Comment</label>
                        <textarea class="form-control" name="bookdesc" placeholder="ENTER BOOK COMMENT" required=""></textarea>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <button id="Change-button" type="submit" class="btn btn-warning" name="post" value="Post" style="width: 300px;">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Book</span>
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

    <script type="text/javascript">
 function getmsg() {
                            var time= document.getElementById('ftm').value;
                            var date=document.getElementById('date').value;
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp=new XMLHttpRequest();
                          } else { // code for IE6, IE5
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                          }
                          xmlhttp.onreadystatechange=function() {
                            if (this.readyState==4 && this.status==200) 
                            {
                                 var resultText = this.responseText;

                                if(resultText == 1)
                                {
                                    document.getElementById('dismsg').innerHTML='Timing booked';
                                    document.getElementById('ftm').innerHTML="";
                                    $('#post').attr('style','pointer-events:none');


                                }
                                else{
                                    document.getElementById('dismsg').innerHTML="";
                                    $('#post').attr('style','pointer-events:all');
                                }



                            }
                        }

              xmlhttp.open("GET","showdate.php?date="+date+"&&time="+time,true);
                        xmlhttp.send();
                        
                    }
                    
                </script>

    

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
    if(isset($_POST['post']))
    {
            $bookfor=mysqli_real_escape_string($con,$_POST['bookfor']);
            $event=mysqli_real_escape_string($con,$_POST['event']);
            $bookdesc=mysqli_real_escape_string($con,$_POST['bookdesc']);
            $time=mysqli_real_escape_string($con,$_POST['ftm']);

           $qry=mysqli_query($con,"SELECT * FROM booking WHERE date(book_for)='$bookfor' and `time`='$time'") or die(mysqli_error($con));
            $row=mysqli_fetch_array($qry);
            $count=mysqli_num_rows($qry);
            if($count <=0)
            {
                $sel=mysqli_query($con,"SELECT * FROM hall");
                $fetch=mysqli_fetch_array($sel);
                $hid=$fetch['hall_id']; 
            
                  $sql=mysqli_query($con,"INSERT INTO `booking`( `hall_id`, `book_by`,`book_for`, `booked_on`, `time`, `book_comment`, `event`, `book_status`) VALUES ('$hid','$u_name','$bookfor',now(),'$time','$bookdesc','$event','booked')") or die(mysqli_error($con));
                            if($sql)
                            {
                                 echo '<script>alert("Inserted Successful"); window.location="index.php"; </script>';
                            }
                            else
                            {
                               echo '<script>alert("Failed"); window.location="book.php"; </script>'; 
                            }
                  }
                  else
                  {
                    echo '<script>alert("Hall already booked"); window.location="view_book.php"; </script>';
                  }
             
     }
?>