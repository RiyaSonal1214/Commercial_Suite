<?php include 'con_db.php';
       include 'session.php';
       // $pid=$_GET['id'];
       // $pstype=$_GET['pstype'];
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
       <!--  <?php
        $sr=mysqli_query($con,"SELECT * FROM pattern where pstype='$pstype' and pt_id='$pid'");
        $row=mysqli_fetch_array($sr);
            ?> -->
       <div class="container">
           <div class="row">
               <div class="col-lg-5 well">
                   <div class="row">
                    <form action="" method="post">
                       <div class="col-lg-7">
                       <?php $arr=explode(",",$row['image']);
                                        $image=$arr[0];
                                       ?>
                           <img src="../admin/img/<?php echo $image; ?>" style="height: 250px; width: 300px; " alt="">
                       </div>
                       <div class="col-lg-5">
                           <h3 style="text-transform: capitalize; color: #222222"><?php echo $row['ptname']; ?></h3>
                           <h4 style="text-transform: capitalize; color: #222222"><?php echo $row['pstype']; ?></h4>
                           <br>
                           <p style="font-size: 15px; text-align: justify;"><?php echo $row['pdescpn']; ?></p>
                           <button type="submit" name="acart" class="btn btn-info"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                       </div>
                     </form>
                     <?php include 'con_db.php';
                            if(isset($_POST['acart']))
                            {
                                $pname=mysqli_real_escape_string($con,$_POST['pname']);
                                $pdescpn=mysqli_real_escape_string($con,$_POST['pdescpn']);
                                $sql=mysqli_query($con,"INSERT INTO `cart`(`cart_id`, `cid`, `cdate`, `pt_id`, `cstatus`) VALUES ('','$cid',now(),'$pid','in_cart')");
                                    if($sql)
                                    {
                                        echo '<script>alert("Added to cart!!"); window.location="hall_design.php"; </script>';
                                    }
                                    else
                                    {
                                        echo '<script>alert("Failed!!");  </script>';
                                    }
                               }
    
                         ?>
                   </div>
               </div>
               <div class="col-lg-1"></div>
               <div class="col-lg-5 well">
                   <h3 style="color: #222222">Gallery</h3>
                   <?php 
                    $splittedstring=explode(",",$row['image']);
                    foreach ($splittedstring as $key => $value) 
                    {
                    ?>
                    <img src="../admin/img/<?php echo $value ?>" style="height: 100px; width: 100px;">          
                    <?php
                    }
                    ?>
               </div>
           </div>

        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: tomato; font-weight: bold; text-decoration: ">Reviews on <span style="color: purple; font-weight: bold; font-size: 28px; text-transform: capitalize; "><?php echo $row['ptname'].':'; ?></span></h4>
            </div>
         </div>
         <?php 
            $sel=mysqli_query($con,"SELECT * FROM ratings WHERE cid='$cid' and pt_id='$pid'");
            $nums=mysqli_num_rows($sel);
            if($nums<=0)
            {
         ?>
         <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-info float-right" style="margin-bottom: 20px;" data-toggle="modal" data-target="#myModal" onclick="showbox(<?php echo $row['pt_id']; ?>)">Please give your Review</button>
            </div>
         </div>
         <?php } ?>
         <div class="row">
         <?php 
            $sl=mysqli_query($con,"SELECT * FROM ratings where pt_id='$pid'");
            while($row=mysqli_fetch_array($sl))
            {
           ?>
                <div class="col-lg-6" style="padding:10px; background-color: #fa00db4f; margin-bottom: 5px; border-radius: 20px; border: 2px solid grey;">
                    <p style="text-align: justify; font-weight: bold; color: black;"><?php echo $row['review']; ?></p>
                    <p style="text-align: left; font-weight: bold; color: blue;">Ratings: <?php echo $row['rpoints'].' Stars'; ?></p>
                    <h6 class="float-right" style="color: blue; font-weight: bold;"><?php echo 'By: '.$cname.' on '.date('d-m-Y',strtotime($row['rdate'])); ?></h6>
                </div>
        <?php } ?>
       </div>
       </div>

        <!--================Contact Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3>About Me</h3>
                            </div>
                            <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </aside>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget news_widget">
                            <div class="f_title">
                                <h3>Newsletter</h3>
                            </div>
                            <p>Stay updated with our latest trends</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>      
                                    </div>              
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-2">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                                <h3>Follow Me</h3>
                            </div>
                            <p>Let us be social</p>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        <script type="text/javascript">
        function showbox(a) {
    
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
          xmlhttp.open("GET","reviewbox.php?id="+a,true);
          xmlhttp.send();
        }
    </script>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
<?php include 'con_db.php';
        if(isset($_POST['save']))
        {
            $rpoint=mysqli_real_escape_string($con,$_POST['rpoints']);
            $review=mysqli_real_escape_string($con,$_POST['review']);
            $sql=mysqli_query($con,"INSERT INTO `ratings`(`rid`, `pt_id`, `cid`, `rpoints`, `review`, `rdate`) VALUES ('','$pid','$cid','$rpoint','$review',now())");
                if($sql)
                {
                    echo '<script>alert("Thank you for the review!!"); window.location="view_more.php?id='.$pid.'&&pstype='.$pstype.'"; </script>';
                }
                else
                {
                    echo '<script>alert("Failed!!");  </script>';
                }
           }

     ?>

