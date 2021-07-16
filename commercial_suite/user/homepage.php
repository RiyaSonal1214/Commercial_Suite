<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
      include 'session.php';

      $date=date('Y-m-d');
      
      $sel_st=mysqli_query($con,"SELECT * FROM shop_owners where shop_o_id='$sid' and notify='no'");
      $res=mysqli_fetch_array($sel_st);
      $num=mysqli_num_rows($sel_st);
      if($num>0)
      {
      $cond=$res['con_enddate'];
      $cond=date('Y-m-d',strtotime($cond.' -3 days'));
      $contact=$res['owner_contact'];
      if($cond <= $date)
      {
            require('textlocal.class.php');

            $textlocal = new Textlocal('riya.rh26@gmail.com', 'Riya14091998');

            $numbers = array($contact);
            $sender = 'TXTLCL';
            $message = 'Dear '.$res['owner'].'! your contract is going to end on '.date('d-m-Y ',strtotime($cond)).' Please renew it as soon as possible';

            try {
                $result = $textlocal->sendSms($numbers, $message, $sender);
                print_r($result);
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage());
            }
            $up=mysqli_query($con,"UPDATE shop_owners SET notify='notified' where shop_o_id='$sid'");
            echo '<script>window.location="homepage.php"; </script>';
      }
      }
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
    <!-- banner-inner -->
    <!-- banner-text -->
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider4">
                <li>
                    <div class="banner-top">
                        <div class="covering">
                            <div class="container">
                                <div class="w3layouts-banner-info text-center">
                                    <h3>We Construct your
                                        <span>Success</span>. </h3>
                                    <p>Architects with a different Approarch.</p>
                                    <a href="about.php" class="mr-2">Read More
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top1">
                        <div class="covering">
                            <div class="container">
                                <div class="w3layouts-banner-info text-center">
                                    <h3>Architecture Designs and
                                        <span>Plans</span>
                                    </h3>
                                    <p>Architects with a different Approarch.</p>
                                    <a href="about.php" class="mr-2">Read More
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                    <a href="contact.php">Contact Us
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top2">
                        <div class="covering">
                            <div class="container">
                                <div class="w3layouts-banner-info text-center">
                                    <h3>We Construct your
                                        <span>Success</span>. </h3>
                                    <p>Architects with a different Approarch.</p>
                                    <a href="about.php" class="mr-2">Read More
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                    <a href="contact.php">Contact Us
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top3">
                        <div class="covering">
                            <div class="container">
                                <div class="w3layouts-banner-info text-center">
                                    <h3>Architecture Designs and
                                        <span>Plans</span>
                                    </h3>
                                    <p>Architects with a different Approarch.</p>
                                    <a href="about.php" class="mr-2">Read More
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                    <a href="contact.php">Contact Us
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>

        <!-- To bottom button-->
        <div class="thim-click-to-bottom">
            <div class="rotate">
                <a href="#about" class="scroll">
                    <i class="fas fa-ellipsis-v"></i>
                </a>
            </div>
        </div>
        <!-- //To bottom button-->
    </div>
    <!--//Slider-->

    <!--// banner-inner -->
    <!--/wthree-banner-bottom-->
    

    <!--/wthree-banner-bottom-->
    <section class="wthree-banner-bottom py-lg-5 py-3 text-center">
        <div class="container py-lg-4 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">
                Upcoming Events</h3>
            <div class="row mt-5">
            <?php 
                $date=date('Y-m-d');
                $sql=mysqli_query($con,"SELECT * FROM event WHERE event_status='posted' and event_date>='$date' order by event_date DESC");
                while($row=mysqli_fetch_array($sql))
                {
              ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4><?php echo $row['event_title']; ?></h4>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 15px; text-align: justify;"><?php echo $row['event_desc']; ?></p>
                            <p style="font-size: 15px; text-align: justify;">Venue: <?php echo $row['venue']; ?></p>
                        </div>
                        <div class="card-footer bg-info">
                            <p class="pull-right" style="color: black; font-weight: bold;"><?php echo date('d-m-Y H:i:s',strtotime($row['event_date'])); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!--//wthree-banner-bottom-->
    <!--/news-->
    <section class="wthree-banner-bottom py-lg-5 py-3 text-center">
        <div class="container py-lg-4 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">
                <span>Latest</span>Advertisements</h3>
            <div class="row mt-5">
            <?php 
            $date=date('Y-m-d');
              $sql=mysqli_query($con,"SELECT * FROM advertisement,shops,shop_owners where advertisement.shop_o_id=shop_owners.shop_o_id and shops.shop_id=shop_owners.shop_id and add_status='APPROVED' order by posted_on desc limit 6");
              
                while($row=mysqli_fetch_array($sql))
                {
             ?>
                <div class="col-lg-4 terms-main text-center">
                    <div class="terms-in two text-center rounded">
                        <div class="card">
                            <div class="card-body">
                                <img src="saved_images/<?php echo $row['image'];?>" style="height:80px; width:80px;" alt="Ad image" class="img-fluid">
                                <h5 class="card-title" style="text-transform: capitalize;"><?php echo $row['add_title']; ?></h5>
                                <p class="card-text"><?php echo $row['add_desc']; ?></p>
                                <p class="card-text"><?php echo 'Shop Name: '.$row['shop_name']; ?></p>
                                <p class="card-text"><?php echo 'Date: '.date('d-m-Y',strtotime($row['posted_on'])); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--//news-->

    <!--footer -->
    <footer class="footer-sec-w3layouts py-lg-5 py-3">
        <div class="container">
            <div class="w3ls-inner-sec py-lg-4 py-3">
                <div class="row">
                    <div class="col-lg-6 footer-left-info text-left">
                        <div class="logo">
                            <h2>
                                <a href="homepage.php">
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
            
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>