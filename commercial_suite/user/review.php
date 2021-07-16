<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
      include 'session.php';
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
            <li class="breadcrumb-item active">Review</li>
        </ol>

    </div>
    <!--// banner-inner --> 
    <!--/wthree-banner-bottom-->
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
            <?php $qry=mysqli_query($con,"SELECT count(*) FROM reviews where shop_o_id='$sid'") or die(mysqli_error($con));
            $row=mysqli_fetch_array($qry);
                            $count=$row[0];
                            ?>
                        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: tomato; font-weight: bold; text-decoration: ">Give Review:</span></h4>
                <button class="btn btn-info " type="button" data-toggle="modal" data-target="#myModal" onclick="showbox()">Please give your Review</button>
            </div>
         </div>
                           <div class="col-lg-3"></div>

                            
             <div class="row">
             <?php 
                $sl=mysqli_query($con,"SELECT * FROM reviews where shop_o_id='$sid' ORDER BY review_date DESC");
                while($row=mysqli_fetch_array($sl))
                {
               ?>
                    <div class="col-lg-6" style="padding:10px; background-color: #fa00db4f; margin-bottom: 5px; border-radius: 20px; border: 2px solid grey;">
                        <p style="text-align: justify; font-weight: bold; color: black;"><?php echo $row['review']; ?></p>
                        <h6 class="float-right" style="color: blue; font-weight: bold;"><?php echo 'By: '.$row['uname'].' on '.date('d-m-Y',strtotime($row['review_date'])); ?></h6>
                    </div>
            <?php } ?>
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
    <script type="text/javascript">
        function showbox() {
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
          xmlhttp.open("GET","reviewbox.php",true);
          xmlhttp.send();
        }
    </script>
    <!--// end-smoth-scrolling -->
    <?php include 'con_db.php';
        if(isset($_POST['save']))
        {
            $review=mysqli_real_escape_string($con,$_POST['review']);

            $sel=mysqli_query($con,"SELECT * FROM shop_owners");
                $fetch=mysqli_fetch_array($sel);
                $oname=$fetch['owner']; 

            $sql=mysqli_query($con,"INSERT INTO `reviews`(`r_id`,`shop_o_id`, `uname`, `review`, `review_date`) VALUES ('','$sid','$oname','$review',now())");
                if($sql)
                {
                    echo '<script>alert("Thank you for the review!!"); window.location="review.php"; </script>';
                }
                else
                {
                    echo '<script>alert("Failed!!");  </script>';
                }
           }

     ?>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content" id="modal_body">
                      </div>
                    </div>
              </div>
          </div>
      </div>
      </div>
</body>

</html>
