<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Register User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">


				
						<div class="profile_details w3l" style="float:right">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<!--<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> -->
												<div class="user-name">
												<?php
													include 'headerUsername.php';
													?>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<!--<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> -->
											<!--<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> -->
											<li> <a href="index.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	 
		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Registration of User</h2>

<span style="color:red">
         <?php
            if($_GET){
                                                            // echo $_GET['msg'];
            //       $ma=$_GET['msg'];                                           
            //   echo "<script type='text/javascript'>alert($ma);</script>";
                                                            echo $_GET['msg'];
                                                            $msg='';
                                                             // print_r($_GET);       
                                                        }else{
                                                        // echo "Url has no user";
                                                        } 



         ?>

         </span>
 		<form method="POST" action="backend/bregisterUser.php">

		 <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>

			<div class="form-group">
                <label for="exampleInputEmail1">Father Name</label>
                <input type="text" class="form-control" name="fatherName" id="fatherName" placeholder="Father name">
            </div>

			<div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="User name " required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pass"  name="pass" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact " required>
            </div>

			<div class="form-group">
                <label for="exampleInputEmail1">Role</label>
				<select name="role" id="role" class="form-control">
						<option>Select Role</option>
						<option value="admin">Admin</option>
						<option value="staff">Staff</option>
						<!--<option>Select Role</option>-->
					</select>	
             
            </div>



			
 
  
  <!--<div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>-->
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>


<!---->



<!---->
  
	
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php
include 'footerCopyright.php';
?>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
									<?php
										include 'menu.php';
									?>
									 </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
	 <script src="js/custom.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
	 <script>
        window.onload = onLoadFunction('registerUser');
    </script>
</body>
</html>