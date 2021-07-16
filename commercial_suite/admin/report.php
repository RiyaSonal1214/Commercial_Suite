<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('session.php'); ?>
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
<script>
        function displaysupplier(a) 
            {
                //alert(a);
                //alert('hi');
                if (window.XMLHttpRequest) 
                    {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    } 
                else{ // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                xmlhttp.onreadystatechange=function() 
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            document.getElementById("supplier").innerHTML = this.responseText;
                        }
                }
                xmlhttp.open("GET","displaysup_name.php?q="+a,true);
                xmlhttp.send();
            }
</script>
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
            <div class="col-md-12">
                 <section class="panel">
                        <section class="contact-wthree" id="contact">
		<div class="container">
			<div class="row pt-xl-4">
			  <div class="col-lg-1"></div>
				<div class="col-lg-12">
					<div class="panel-body">
				<div class="row">
								<div class="col-md-3">
								<form name="" method="post" action="">
									<div class="form-group">
										<label> Search By Date: </label>
										<input type="date" class="form-control input-sm" name="date" >
										<input type="submit" name="search_by_date" class="btn btn-primary btn-block" value="Submit" >
									</div>
								</form>
								</div>
										
								
							
									
									
							
								<div class="col-md-4">
								<form name="" method="post" action="">
									<label> Search By Month: </label>
										<select class="form-control input-sm" name="month">
											<option value="">Select the Month</option>
											<option value ="01"> January </option>
											<option value ="02"> February </option>
											<option value ="03"> March </option>
											<option value ="04"> April </option>
											<option value ="05"> May </option>
											<option value ="06"> June </option>
											<option value ="07"> July </option>
											<option value ="08"> August </option>
											<option value ="09"> September </option>
											<option value ="10"> October </option>
											<option value ="11"> November </option>
											<option value ="12"> December </option>
											
										</select>
										<input type="submit" name="search_by_month" class="btn btn-primary btn-block" value="Submit" >
										</form>
								</div>
										
								
							
										
								
								<div class="col-md-4">
								<form name="" method="post" action="">
								
									<label> Search  By Year: </label>
										<select class="form-control input-sm" name="year">
											<option value="">Select the Year</option>
											<?php $year='2019';
											$curYear=date('Y');
											$showYear=date('Y',strtotime($curYear.'+10 year')); 

											while($year<=$showYear){?>
											<option value ="<?php echo $year?>"><?php echo $year++?></option>
											<?php }?>
										</select>
										<input type="submit" name="search_by_year" class="btn btn-primary btn-block" value="Submit" >
										</form>
								</div>
							
										
										
							
						</div>
						</div>
						
				<?php
					if(isset($_POST['search_by_date']))
					{
						
				?>

				<div class="col-md-11">
				<div id='DivIdToPrint'>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					 <tr>
						<th>SL NO</th>
						<th>Shop Name</th>
						<th>Paid For</th>
						<th>Paid Amount</th>
						<th>Balance</th>
						<th>Paid Date</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$date = $_POST['date'];
						include "con_db.php";
						$query = mysqli_query($con,"SELECT * FROM payment,shop_owners where payment.shop_o_id=shop_owners.shop_o_id and `paid_date`='$date'");
						
						$i=1;
						while($row = mysqli_fetch_array($query)){
					?>

					<tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $row['shop_name']; ?></td>
					 	<td><?php echo $row['paid_for']; ?></td>
					 	<td><?php echo  'Rs '.$row['paid_amt'];?></td>
					 	<td><?php echo 'Rs '.$row['balance']; ?></td>
                            <td ><?php echo date('d-m-Y',strtotime($row['paid_date']));?></td>
					 	</td>
					 </tr>
					
					<?php } ?>
				</tbody>	
			</table>

			
			<div class="well">
			<?php 
			$rr = mysqli_query($con,"SELECT SUM(paid_amt) FROM payment,shop_owners where payment.shop_o_id=shop_owners.shop_o_id and `paid_date`='$date'");
			$sum = mysqli_fetch_array($rr);

			$count = mysqli_num_rows($query); ?>
			
				<p><h4><b>Total Payment : <?php echo $count; ?></b></h4></p>
				<p><h4><b>Sum of all total Amount: <?php echo $sum[0]; ?></b></h4></p>
			</div>
			</div>
			<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();' style="margin-bottom: 20px;">
			</div>

			<!-- /.row -->
			<?php 
					}else if(isset($_POST['search_by_month']))
					{
						
				?>
				<div class="col-md-11">
				<div id='DivIdToPrint'>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					 <tr>
						<th>SL NO</th>
						<th>Shop Name</th>
						<th>Paid For</th>
						<th>Paid Amount</th>
						<th>Balance</th>
						<th>Paid Date</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$month=$_POST['month'];
						include "con_db.php";
						$query = mysqli_query($con,"SELECT * FROM payment,shop_owners where payment.shop_o_id=shop_owners.shop_o_id and month(`paid_date`)='$month'");
						
						$i=1;
						while($row = mysqli_fetch_array($query)){
					?>

					<tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $row['shop_name']; ?></td>
					 	<td><?php echo $row['paid_for']; ?></td>
					 	<td><?php echo  'Rs '.$row['paid_amt'];?></td>
					 	<td><?php echo 'Rs '.$row['balance']; ?></td>
                            <td ><?php echo date('d-m-Y',strtotime($row['paid_date']));?></td>
					 	</td>
					 </tr>
					
					<?php } ?>
				</tbody>	
			</table>

			
			<div class="well">
			<?php 
			$rr = mysqli_query($con,"SELECT SUM(paid_amt) FROM payment,shop_owners where payment.shop_o_id=shop_owners.shop_o_id and month(`paid_date`)='$month'");
			$sum = mysqli_fetch_array($rr);

			$count = mysqli_num_rows($query); ?>
			
				<p><h4><b>Total Payment : <?php echo $count; ?></b></h4></p>
				<p><h4><b>Sum of all total Amount: <?php echo $sum[0]; ?></b></h4></p>
			</div>
			</div>
			<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();' style="margin-bottom: 20px;">
			</div>
			
			<!-- /.row -->
			<?php 
					}else if(isset($_POST['search_by_year']))
					{
						
				?>
				
				<div class="col-md-11">
				<div id='DivIdToPrint'>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					 <tr>
						<th>SL NO</th>
						<th>Shop Name</th>
						<th>Paid For</th>
						<th>Paid Amount</th>
						<th>Balance</th>
						<th>Paid Date</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$year = $_POST['year'];
						include "con_db.php";
						$query = mysqli_query($con,"SELECT * FROM payment,shop_owners where payment.shop_o_id=shop_owners.shop_o_id and year(`paid_date`)='$year'");
						
						$i=1;
						while($row = mysqli_fetch_array($query)){
					?>

					<tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $row['shop_name']; ?></td>
					 	<td><?php echo $row['paid_for']; ?></td>
					 	<td><?php echo  'Rs '.$row['paid_amt'];?></td>
					 	<td><?php echo 'Rs '.$row['balance']; ?></td>
                            <td ><?php echo date('d-m-Y',strtotime($row['paid_date']));?></td>
					 </tr>
					
					<?php } ?>
				</tbody>	
			</table>

			
			<div class="well">
			<?php 
			$rr = mysqli_query($con,"SELECT SUM(paid_amt) FROM payment,shop_owners where payment.shop_o_id=shop_owners.shop_o_id and year(`paid_date`)='$year'");
			$sum = mysqli_fetch_array($rr);

			$count = mysqli_num_rows($query); ?>
			
				<p><h4><b>Total Payment : <?php echo $count; ?></b></h4></p>
				<p><h4><b>Sum of all total Amount: <?php echo $sum[0]; ?></b></h4></p>
			</div>
			</div>
			<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();' style="margin-bottom: 20px;">
			</div>
			<?php 
					}
					
			?>			

            </div>
				</div>
			</div>
	</section>
   
    
                         </section>

                    </div>
                </div>
                   
    <!-- //tasks -->

<!--main content end-->
<footer class="footer py-sm-5 py-4 text-center">
		<div class="container py-xl-4 py-lg-3">
			<!-- logo -->
			<div class="logo-2 text-center">
				<h2><a class="" href="index.php"><img src="images/logo.png" alt="" class="img-fluid">Commercial Suite</a></h2>
			</div>
			<!-- //logo -->
			<div class="footer-ex my-5">
				<h3 class="footer-tha">Thank You for Visiting</h3>
				<img src="images/img5.png" alt="" class="img-fluid">
			</div>
			<!-- social icons footer -->
			<div class="w3l-footer text-center">
				
			</div>
			<!-- //social icons footer -->
		</div>
		
	</footer>
	<div class="copyright">
		<div class="copyright">
            <p>Copyright © 2019 Commercial Suite. All rights reserved. Designed by Riya & Sithara.</p>
        </div>
	</div>
 </section>
                    </section>
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
<script>
	function printDiv() 
	{
	 
	 	 var divToPrint=document.getElementById('DivIdToPrint');

	    var htmlToPrint = '<head><title></title><style media="print" >tr{page-break-inside: avoid; }</style><link rel="stylesheet" type="text/css" media="screen,print" href="css/bootstrap.css"><link href="font-awesome/css/font-awesome.min.css" media="screen,print" rel="stylesheet" type="text/css"><link href="css/style.css" media="screen,print" rel="stylesheet"><link href="css/bootstrap.min.css" media="screen,print" rel="stylesheet"></head><body>';

	    htmlToPrint += divToPrint.outerHTML;
	    newWin = window.open("");
	    newWin.document.write(htmlToPrint);
	   newWin.focus();
	  
	 	setTimeout(function() {
      newWin.print();
      newWin.close();
                    }, 100);
	

	}

</script>
  <!-- //calendar -->
  
</body>
</html>
