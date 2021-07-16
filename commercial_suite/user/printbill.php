<?php include 'con_db.php';
      include 'session.php';
      $id = $_GET['id'];
      $query= mysqli_query($con,"SELECT * FROM `maintenance_bill` WHERE `mbill_id`='$id'");
      $qr=mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Commercial Suite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Erection a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/examples.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="css/slider-pro.css" rel='stylesheet' type='text/css' />
    <link href="css/timeline.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
    <div class="main-sec" id="home">
        <?php include 'header.php'; ?>
        <!--//header-->
    </div>
    <!-- banner-text -->
    <!-- banner-inner -->
    <div class="banner-inner">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="homepage.php">Home</a>
            </li>
            <li class="breadcrumb-item active">View Bills</li>
        </ol>

    </div>
    <!--// banner-inner --> 
    <!--/wthree-banner-bottom-->
         <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
           
        <div class="container" style="margin-left: 260px;" >
          <div id='DivIdToPrint'>
          <div class="row col-md-12">
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
               <input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'><a href="bills.php?mbill_id=<?php echo $id; ?>" class="btn btn-warning btn-sm">Back</a>
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



<footer class="footer-sec-w3layouts py-lg-5 py-3">
        <div class="container">
            <div class="w3ls-inner-sec py-lg-4 py-3">
                <div class="row">
                    <div class="col-lg-6 footer-left-info text-left">
                        <div class="logo">
                            <h2>
                                <a href="index.php">
                                    <i class="fab fa-firstdraft"></i> Commercial Suite</a>
                            </h2>
                        </div>
                         <p class="para my-4">An Commercial Suite is an private sector based apartment complex that provides well designed shops for Business purpose. It is a complex which provide the best value for the stores purely for the business purose.</p>


                    </div>
                    <div class="col-lg-6 footer-right-info text-right">
                        <h6>Get In Touch</h6>
                        <address class="ad-info mt-5">
                            <strong>Kankanady</strong>
                            <br> Mangalore,575001
                            <br>
                            <abbr title="Phone">P:</abbr> 0824-224466
                        </address>

                    </div>
                </div>
                <div class="row copyright-info mt-3">
                    <div class="col-lg-6 copyright">
                        <p>&copy; 2019 Commercial Suite. All Rights Reserved | Design by Riya & Sithara
                        </p>
                    </div>                    
                </div>

            </div>
        </div>
    </footer>
    <!-- //Custom-JavaScript-File-Links -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!--slider-->
    <!-- banner slider -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 1000,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- //banner slider -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script>
        $(document).ready(function($) {
            $('#example2').sliderPro({
                width: 350,
                height: 400,
                visibleSize: '100%',
                forceSize: 'fullWidth',
                autoSlideSize: true
            });

            // instantiate fancybox when a link is clicked
            $(".slider-pro").each(function() {
                var slider = $(this);

                slider.find(".sp-image").parent("a").on("click", function(event) {
                    event.preventDefault();

                    if (slider.hasClass("sp-swiping") === false) {
                        var sliderInstance = slider.data("sliderPro"),
                            isAutoplay = sliderInstance.settings.autoplay;

                        $.fancybox.open(slider.find(".sp-image").parent("a"), {
                            index: $(this).parents(".sp-slide").index(),
                            afterShow: function() {
                                if (isAutoplay === true) {
                                    sliderInstance.settings.autoplay = false;
                                    sliderInstance.stopAutoplay();
                                }
                            },
                            afterClose: function() {
                                if (isAutoplay === true) {
                                    sliderInstance.settings.autoplay = true;
                                    sliderInstance.startAutoplay();
                                }
                            }

                        });
                    }
                });
            });
        });
    </script>



    <!-- /timeline -->
    <script src="js/timeline.min.js"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
    <!-- //timeline -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
                                    var defaults = {
                                          containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear' 
                                     };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>