<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
     <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
    <img src="images/logo.jpg" alt="Commercial Suite" style="height: 80px; width: 240px;" />
    <a href="" class="logo" >  
    </a>
   
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img src="images/icon/image.jpg" alt="Manager">
                <span class="username">Manager</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                
                <li>
                    <a href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                </li>
            </ul>
        </li>
       
    </ul>
    <!--search & user info end-->

</div>
</header>
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="homepage.php">
                        <i class="fa fa-dashboard"></i>
                        <span><b><u>Dashboard</u></b></span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="parking.php">
                        <i class="fa fa-automobile"></i>
                        <span>Parking</span>
                    </a>                    
                </li>

                <li class="sub-menu">
                    <a href="staff_attendance.php">
                        <i class="fa fa-users"></i><span>Staff</span>
                    </a>                    
                </li>

                <li class="sub-menu">
                    <a href="booking.php">
                        <i class="fa fa-home"></i>
                        <span>Hall Booking</span>
                    </a>   
                    <ul class="sub">
                        <li>
                            <a href="booking.php">Book hall</a>
                        </li>
                        <li>
                            <a href="view_booking.php">View Booking</a>
                        </li>
                    </ul>                
                </li>
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>