<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
  <?php include 'con_db.php';
      include 'session.php';
      //$s_id=$_GET['id'];
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
            <li class="breadcrumb-item active">Edit User Profile</li>
        </ol>

    </div>
      <!-- //short-->
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
             <div class="col-md-1"></div>
             <div class="col-md-10">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Change My Profile</h3>
            <div class="contact-list-grid">
            <?php 
            $sql=mysqli_query($con,"SELECT * FROM shops,shop_owners where shops.shop_id=shop_owners.shop_id and shop_owners.`shop_name`='$sname'") or die(mysqli_error($con));
           $row=mysqli_fetch_array($sql);
           ?>
               <form action="#" method="post" enctype="multipart/form-data">
                  <div class=" agile-wls-contact-mid">
                    <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="form-group contact-forms col-md-4">
                           <input type="text" class="form-control" placeholder="Owner Name"  name="oname" value="<?php echo $row['owner']; ?>">
                        </div>
                        <div class="form-group contact-forms col-md-4">
                           <input type="text" class="form-control" pattern="^\d{10}$" title="10 numeric characters only" placeholder="Owner Contact" name="contact" value="<?php echo $row['owner_contact']; ?>">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="form-group contact-forms col-md-4">
                           <input type="text" class="form-control"  placeholder="Shop Name" name="sname" value="<?php echo $row['shop_name']; ?>">
                        </div>
                        <div class="form-group contact-forms col-md-4">
                           <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" placeholder="Owner Email" name="email" value="<?php echo $row['email']; ?>">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="form-group contact-forms col-md-4">
                           <input type="text" class="form-control"  placeholder="Shop Type" name="stype" value="<?php echo $row['shop_type']; ?>" readonly="">
                        </div>
                        <div class="form-group contact-forms col-md-4">
                           <input type="text" class="form-control"  placeholder="Shop Category" name="scat" value="<?php echo $row['shop_cat']; ?>">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="form-group contact-forms col-md-8">
                            <input type="text" class="form-control"  placeholder="Shop Description" name="shopdesc" value="<?php echo $row['shop_desc']; ?>">
                        </div>
                    </div>
                    <div class="row">
                                        <div class="col-lg-4"></div>
                                         <div class="col-lg-6">
                                                <button type="submit" class="btn btn-block sent-butnn" name="save" style="width: 200px;">Edit</button>
                                            </div>
                                            </div>
                     
                  </div>
               </form>
               <?php
                  include('con_db.php');
                  if(isset($_POST['save'])) 
                  {
                     $oname=mysqli_real_escape_string($con,$_POST['oname']);
                     $contact=mysqli_real_escape_string($con,$_POST['contact']);
                     $email=mysqli_real_escape_string($con,$_POST['email']);
                     $sname=mysqli_real_escape_string($con,$_POST['sname']);
                     $stype=mysqli_real_escape_string($con,$_POST['stype']);
                     $scat=mysqli_real_escape_string($con,$_POST['scat']);
                     $shopdesc=mysqli_real_escape_string($con,$_POST['shopdesc']);
                    
                     $sql=mysqli_query($con,"UPDATE `shop_owners` SET `shop_type`='$stype',`shop_name`='$sname',`owner`='$oname',`owner_contact`='$contact',`email`='$email',`shop_cat`='$scat',`shop_desc`='$shopdesc' WHERE `shop_o_id`='$sid'");
                        if($sql)
                        {
                           echo '<script>alert("Success!!!"); window.location="profile.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed!!!"); window.location="edit_profile.php" </script>';
                        }
                       
                     
                  
                  }
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>
      <!--subscribe-address-->
      
      <!--//subscribe-address-->
      
      <!--//subscribe-->
      <!-- footer -->
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