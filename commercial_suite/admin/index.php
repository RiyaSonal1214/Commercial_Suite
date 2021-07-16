<?php include 'con_db.php';
       include 'session.php';
       $pid=$_GET['id'];
       $pstype=$_GET['pstype'];
 ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Style Bricks</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <style type="text/css">
            .well{
                background-color: #faba00;
                border-radius: 10px;
                border: 2px solid ;
                padding: 10px;
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <?php include 'header.php'; ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Designs</h2>
                        <div class="page_link">
                            <a href="home.php">Home</a>
                            <a href="">Designs</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <br><br>
        <?php
        $sr=mysqli_query($con,"SELECT * FROM pattern where pstype='$pstype' and pt_id='$pid'");
        $row=mysqli_fetch_array($sr);
            ?>
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
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
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

