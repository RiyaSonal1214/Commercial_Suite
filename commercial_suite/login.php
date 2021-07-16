<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php'; ?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Commercial-Suite</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Effective Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="login/css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
	<style type="text/css">
	<?php
	if(isset($error))
	{
	 ?>
	 input:focus
	 {
	  border:solid red 1px;
	 }
	 <?php
	}
	?>
	</style>
</head>

<body>
	<div class="video-w3l" data-vide-bg="login/video/1">
		<!--header-->
		<div class="header-w3l">
			<h1>
				<span>C</span>ommercial
				<span>S</span>uite
				<span>L</span>ogin
			</h1>
		</div>
		<!--//header-->
		<div class="main-content-agile">
			<div class="sub-main-w3">
				<h2>Login 
					<i class="fa fa-hand-o-down" aria-hidden="true"></i>
				</h2>
				<form action="#" method="post" >


					<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>
						<select name="type" id=" type" class="user" required="" oninvalid="InvalidType(this);" 
           oninput="InvalidType(this);">
							<option value="">Select Type</option>
							<option value="Owner">Owner</option>
							<option value="Admin">Admin</option>
							<option value="User">User</option>
							<?php $sr=mysqli_query($con,"SELECT * FROM user"); 
                            while($rw=mysqli_fetch_array($sr))
                            {
                            ?>
                                <option value="others"><?php echo $rw['username']; ?></option>
                            <?php } ?>
						</select>
					</div>
					<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>
						<input placeholder="Username" name="username" title="characters only" class="user" type="text" required="" id="name" oninvalid="InvalidName(this);" 
           oninput="InvalidName(this);">
					</div>
					<div class="pom-agile">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input placeholder="Password" name="pwd" class="pass" type="password" required="" id="pwd" pattern=".{3,}" title="Must contain at least 3 or more characters" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);">
					</div>
					<div class="sub-w3l">
						<div class="sub-agile">
							<input type="checkbox" id="brand1" value="">
							<label for="brand1">
								<span></span>Remember me</label>
						</div>
						<div class="clear"></div>
					</div>
					<div class="right-w3l">
						<input type="submit" name="login" value="Login">
					</div>
				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2019 Commercial Suite Login Form. All rights reserved | Design by
				Riya & Sithara
			</p>
		</div>
		<!--//footer-->
	</div>

	<!-- js -->
	<script src="login/js/jquery-2.1.4.min.js"></script>
	<script src="login/js/jquery.vide.min.js"></script>
	<script type="text/javascript">
		function InvalidMsg(textbox) 
		{
		    if (textbox.value === '') {
		        textbox.setCustomValidity('Enter the password');
		    }else if (textbox.validity.typeMismatch){
		        textbox.setCustomValidity('Must contain at least 3 or more characters');
		    } else {
		       textbox.setCustomValidity('');
		    }

		    return true;
		}

		function InvalidType(textbox) 
		{
		    if (textbox.value === '') {
		        textbox.setCustomValidity('Select the user type');
		    }else {
		       textbox.setCustomValidity('');
		    }

		    return true;
		}

		function InvalidName(textbox) 
		{
		    if (textbox.value === '') {
		        textbox.setCustomValidity('Enter the username');
		    }else {
		       textbox.setCustomValidity('');
		    }

		    return true;
		}
	</script>
	<!-- //js -->
	
</body>

</html>
	
<?php
	if(isset($_POST['login']))
	{

		$type=mysqli_real_escape_string($con,$_POST['type']);
		$u_name=mysqli_real_escape_string($con,$_POST['username']);
		$pwd=mysqli_real_escape_string($con,$_POST['pwd']);

		


		if($type=='Admin' || $type=='Owner')
		{
			$sql=mysqli_query($con,"SELECT * FROM admin where username='$u_name' and pwd='$pwd'") or die(mysqli_error($con));
			$rows=mysqli_num_rows($sql);
			$fetch=mysqli_fetch_array($sql);
			if($rows==1)
			{
				session_start();
				$_SESSION['uname']=$fetch['username'];
				echo '<script>alert("Welcome to '.$fetch['username'].' Homepage"); window.location="admin/homepage.php"; </script>';
			}
			else
			{
				echo '<script>alert("Username  and Password  doesnot match"); </script>';
			}
	    }elseif($type=='User')
	    {
	        $sql=mysqli_query($con,"SELECT * FROM shops,shop_owners where shops.shop_id=shop_owners.shop_id and shops.`shop_no`='$u_name' and shop_owners.`pwd`='$pwd'") or die(mysqli_error($con));
	        $rows=mysqli_num_rows($sql);
	        $fetch=mysqli_fetch_array($sql);
	        if($rows==1)
	        {
	            session_start();
	            $_SESSION['shop_id']=$fetch['shop_id'];
	            $_SESSION['sid']=$fetch['shop_o_id'];
	            $_SESSION['sname']=$fetch['shop_name'];
	            echo '<script>alert("Welcome '.$fetch['owner'].'"); window.location="user/homepage.php"; </script>';
	        }
	        else
	        {
	            echo '<script>alert("Shop Number doesnot Exist"); </script>';
	        }
	    }
	    elseif($type=='others')
	    {
	        $sql=mysqli_query($con,"SELECT * FROM user where username='$u_name' and pwd='$pwd'") or die(mysqli_error($con));
	        $rows=mysqli_num_rows($sql);
	        $fetch=mysqli_fetch_array($sql);
	        if($rows==1)
	        {
	            session_start();
				$_SESSION['uname']=$fetch['username'];
				echo '<script>alert("Welcome to '.$fetch['username'].' Homepage"); window.location="others/homepage.php"; </script>';
	        }
	        else
	        {
	            echo '<script>alert("Username and password doesnot Match"); </script>';
	        }
	    }
	    else
	    {
	    	echo '<script>alert("Username doesnot Exist"); </script>';
	    }
	}

 ?>
