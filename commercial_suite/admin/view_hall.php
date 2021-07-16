<?php 
    include 'con_db.php';
    include 'session.php'; 
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
                 <?php $qry=mysqli_query($con,"SELECT * FROM hall") or die(mysqli_error($con));
                                        $row=mysqli_fetch_array($qry);
                                        $count=mysqli_num_rows($qry);
                                        if($count > 0)
                                        {
                                        ?>

        <div class="row">
        <div class="col-md-6"></div>
            <div class="col-lg-12">
                    <section class="panel">
                                <!-- DATA TABLE -->
                               <header class="panel-heading">
                           Hall Information
                        </header>
                                
                                    <table class="table table-bordered  table-hover" style="background-color:white" border="solid green 1px">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Capacity</th>
                                                <th>Per Hour Cost</th>                                                
                                                <th>Description</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                          $sql=mysqli_query($con,"SELECT * FROM hall ORDER BY hall_id ASC");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td ><?php echo $row['hall_name'];  ?></td>
                                                <td><?php echo $row['hall_type'];  ?></td>
                                                <td><?php echo $row['capacity'];  ?></td>
                                                <td><?php echo $row['per_hour_charges'];  ?></td>
                                                <td><?php echo $row['hall_desc'];  ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="up_hall.php?id=<?php echo $row['hall_id']; ?>" class="btn btn-info" data-placement="top" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="delete_hall.php?id=<?php echo $row['hall_id']; ?>" onclick="return confirm('Are you sure to delete'); " class="btn btn-danger" data-placement="top" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
                                  
                                    </table>
                                   

                                <?php } else { ?>
                        <h1 style="text-align: center;">Hall Details</h1>
                        <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">   

                                        <div class="row">
                                        <div class="col-lg-2"></div>
                                         <div class="col-lg-4">  
                                            <div class="form-group"  >
                                                <label for="cc-payment" class="control-label mb-1">Hall Name</label>
                                                <input id="cc-pament" name="hname" type="text" class="form-control" aria-required="true" aria-invalid="false" pattern="[A-Za-z\s]+" required="" placeholder="HALL NAME">
                                            </div>
                                            </div>

                                            <div class="col-lg-4"> 
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Hall Type</label>
                                               <select name="htype" class="form-control" required="">
                                                    <option>select the type</option>  
                                                    <option value="AC">AC</option>                                                    
                                                    <option value="Non AC">Non AC</option>
                                                </select>
                                            </div>
                                            </div>
                                            </div>

                                            <div class="row"> 

                                        <div class="col-lg-2"></div>
                                         <div class="col-lg-4">  
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Capacity</label>
                                                <input id="cc-pament" name="cap" type="text" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9]+" required="" placeholder="CAPACITY">
                                            </div>
                                            </div>

                                            <div class="col-lg-4"> 
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Per Hour Charge</label>
                                                <input id="cc-pament" name="cost" type="text" class="form-control" aria-required="true" aria-invalid="false" pattern="[0-9.]+" required="" placeholder="PER HOUR CHARGES">
                                            </div>
                                            </div>
                                            </div>


                                        <div class="row"> 
                                         <div class="col-lg-2"></div>
                                        <div class="col-lg-8">           
                                            <div class="form-group" >
                                                <label for="cc-number" class="control-label mb-1">Description</label>
                                                <textarea id="cc-number" name="desc" type="password" class="form-control cc-number identified visa" placeholder="HALL DECRIPTION" required=""></textarea>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
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
            $hname=mysqli_real_escape_string($con,$_POST['hname']);
            $htype=mysqli_real_escape_string($con,$_POST['htype']);

            $capacity=mysqli_real_escape_string($con,$_POST['cap']);
            $tcost=mysqli_real_escape_string($con,$_POST['cost']);
            $desc=mysqli_real_escape_string($con,$_POST['desc']);

            $qry=mysqli_query($con,"SELECT * FROM apartment") or die(mysqli_error($con));
            $row=mysqli_fetch_array($qry);
            $count=mysqli_num_rows($qry);
            $apid=$row['apartment_id'];

             $sql=mysqli_query($con,"INSERT INTO `hall`( `apartment_id`,`hall_name`, `hall_type`, `capacity`, `hall_desc`, `per_hour_charges`) VALUES ('$apid','$hname','$htype','$capacity','$desc','$tcost')");
                        if($sql)
                        {   
                            echo '<script>alert("Inserted Successful"); window.location="view_hall.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="view_hall.php"; </script>'; 
                        }
         }
        



?>