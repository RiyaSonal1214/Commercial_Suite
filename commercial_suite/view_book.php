<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
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
            <li class="breadcrumb-item active">View Booking</li>
        </ol>

    </div>
    <!--// banner-inner -->
    <!--/wthree-banner-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 card" style="margin-bottom: 10px;margin-top: 10px;">
                
                <h3 class="title-5 m-b-20">Booking Information</h3>

                <table class="table table-bordered table-hover table-striped" style="margin-top: 20px;">
                    <thead>
                        <tr>
                            <th>Booked By</th>
                            <th>Event</th>
                            <th>Booked For</th>
                            <th>Timing</th>   
                            <th>Book Comment</th>                                               
                            <th>Booked On</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php 
                     $date=date('Y-m-d');
                      $sql=mysqli_query($con,"SELECT * FROM booking where book_for>='$date' ORDER BY book_for ASC ");
                      
                        while($row=mysqli_fetch_array($sql))
                        {
                      ?>

                        <tr class="tr-shadow">
                            <td><?php echo  $row['book_by'] ?></td>
                            <td><?php echo $row['event'];  ?></td>
                            <td ><?php echo date('d-m-Y',strtotime($row['book_for']));?></td>
                            <td><?php $t=$row['time'];
                            if($t==1){
                                echo 'MORNING (07:00 TO 12:00)';
                                }elseif($t==2){
                                    echo 'AFTERNOON(01:00 TO 5:00)';
                                }
                                elseif($t==3){
                                    echo 'NIGHT (06:00 TO 12:00)';
                                }
                                ?></td>
                            <td ><?php echo $row['book_comment'];  ?></td>
                            <td ><?php echo date('d-m-Y',strtotime($row['booked_on']));?></td>
                        </tr>
                       <?php } ?> 
                    </tbody>
              
                </table>
            </div>
        </div>
    </div>    

    <!--footer -->
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
                        <p>&copy; 2018 Erection. All Rights Reserved | Design by Riya & Sithara
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

