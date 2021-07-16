<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'session.php';
      include 'con_db.php' ;
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
      <section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        
                <br>

        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-lg-9">
                    <section class="panel">
                                <!-- DATA TABLE -->
                               <header class="panel-heading">
                           Query Report
                        </header>
                                
                                    <table class="table table-bordered  table-hover" style="background-color:white" border="solid green 1px">
                                        <thead>
	        			<tr>
	        				<th>SL NO</th>
	        				<th>By</th>
	        				<th>Query</th>
	        				<th>Sent on</th>
	        				<th>Reply</th>
	        				<th>Reply Date</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<?php 
	        				$i=1;
	        			$sel=mysqli_query($con,"SELECT * FROM queries ORDER BY sent_date DESC");
	        				while($row=mysqli_fetch_array($sel))
	        				{
	        			 ?>
	        			 <tr>
	        			 <td><?php echo $i++;?></td>
	        			 <td><?php echo $row['sent_by']; ?></td>
	        			 <td><?php echo $row['query']; ?></td>
	        			 <td><?php echo date('d-m-Y',strtotime($row['sent_date'])); ?></td>
	        			 <?php $qstatus=$row['query_status'];
	        			 		if($qstatus=='sent')
	        			 		{
	        			  ?> 
	        			 <td colspan="2"><button class="btn btn-info" type="button" onclick="showform(<?php echo $row['q_id']; ?>);">Reply</button></td>
	        			 <?php }elseif($qstatus=='replied'){ ?>
	        			 	<td><?php echo $row['reply']; ?></td>
	        			 <td><?php echo date('d-m-Y',strtotime($row['reply_date'])); ?></td>
	        			 <?php	} ?>
	        			 </tr>
	        			 <?php } ?>
	        		</tbody>
                                    </table>
                                    </section>
                                </div>
                                <div class="col-md-1"></div>

             <div class="col-md-3" id="showform"></div>
                                <!-- END DATA TABLE -->
                            </div>
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

	<?php if(isset($_POST['post']))
		{
        	$reply=mysqli_real_escape_string($con,$_POST['reply']);
        	$qid=mysqli_real_escape_string($con,$_POST['q_id']);

        	$sql=mysqli_query($con,"UPDATE `queries` SET  `reply`='$reply', `reply_date`=now(),`query_status`='replied' where q_id='$qid'");
        	if($sql)
        	{
        		echo '<script>alert("Reply is sent!!!"); window.location="query.php"; </script';
        	}
        	else
        	{
        		echo '<script>alert("Failed!!!"); window.location="query.php"; </script';
        	}
		}
	?>
	<script type="text/javascript">
		function showform(qid)
		{
			if (window.XMLHttpRequest) {
			    // code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp=new XMLHttpRequest();
			  } else { // code for IE6, IE5
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
			    if (this.readyState==4 && this.status==200) {
			      document.getElementById("showform").innerHTML=this.responseText;
			    }
			  }
			  xmlhttp.open("GET","showform.php?qid="+qid,true);
			  xmlhttp.send();
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