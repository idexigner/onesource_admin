<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>View User</title>
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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 

<?php
// if(@$_GET['purchaseIdd']){

//     echo "<body onLoad=\"loadPurchaseMod();\">";
// 		// echo "<body onLoad=\"abc();\">";

// }
// else{
//     echo "<body onLoad=\"tableLoad();\">";
//     // onLoad=\"loadModalnot();\"
// }



?>

<body onLoad="tableLoad()">
<!--<body>-->
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
													<p>Sir Shamim</p>
													<span>Administrator</span>
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
 
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info w3l-table-hover">
					  <h2>Purchase</h2>
					  
            
						 <table id="purchaseTableId" class="table-hover"   >
						<thead>
						  <tr>
							<th>ID</th>
							<th>Name</th>
							<th>Phone Number</th>
							<th>Range</th>
							<th>Society Name</th>		
							<th>Type</th>						
						  </tr>
						</thead>

						 <tbody id="purchaseTable">
                                            
             </tbody>
                        
           
					  </table>


					</div>
				
			
			</div>
            	</div>





		<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info w3l-table-hover">
					  <h2>Sale</h2>
					  
            
						 <table id="saleTableId" class="table-hover"   >
						<thead>
						  <tr>
							<th>ID</th>
							<th>Name</th>
							<th>Phone Number</th>
							<th>Complete Address</th>
							<th>Society Name</th>		
							<th>Demand</th>	
							<th>Type</th>	
							<th>Direction</th>	
							<th>Floor</th>
															
						  </tr>
						</thead>

						 <tbody id="saleTable">
                                            
             </tbody>
                        
           
					  </table>


					</div>
				 
			
			</div>
            	</div>
                



								
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
						<div class="w3l-table-info w3l-table-hover">
							<h2>Require Rent</h2>
							
							
							<table id="requireTableId" class="table-hover"   >
											<thead>
												<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Phone Number</th>
												<th>Range</th>
												<th>Society Name</th>													
												<th>Type</th>	
												<!--<th>Direction</th>	
												<th>Floor</th>-->
																				
												</tr>
											</thead>

											<tbody id="requireTable">
																											
											</tbody>
																	
										
							</table>


										</div>
										
								
								</div>
            	</div>





			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
						<div class="w3l-table-info w3l-table-hover">
							<h2>Available Rent</h2>
							
							
							<table id="availableTableId" class="table-hover"   >
											<thead>
												<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Phone Number</th>
												<th>Complete Address</th>
												<th>Society Name</th>					
												<th>Type</th>	
												<th>Demand</th>	
												<th>Area</th>
												<th>Direction</th>	
												<th>Floor</th>
																				
												</tr>
											</thead>

											<tbody id="availableTable">
																											
											</tbody>
																	
										
								</table>


						</div>
									
										
								
				</div><!-- agile-tables -->
            </div>
                



<?php include 'modalPurchase.php'; ?>

<?php include 'modalSale.php'; ?>    
 <?php include 'modalRequire.php'; ?>

 <?php include 'modalAvailable.php'; ?>     

          









































		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<!--<div class="inner-block">

</div>-->
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>&copy; 2018 Virual Wallet. All Rights Reserved |Design by <a href="#">Wasim's Team</a></p>
</div>	
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
										<li><a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										<li><a href="registerUser.php"><i class="fa fa-user" aria-hidden="true"></i><span>Register User</span><div class="clearfix"></div></a></li>
										<li><a href="viewUser.php"><i class="fa fa-table" aria-hidden="true"></i><span>View User</span><div class="clearfix"></div></a></li>
										<li><a href="viewDetails.php"><i class="fa fa-table" aria-hidden="true"></i><span>View Details</span><div class="clearfix"></div></a></li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>

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

		

<script>				
	var purchaseTable = document.getElementById('purchaseTableId');
                
                for(var i = 1; i < purchaseTable.rows.length; i++)
                {
                    purchaseTable.rows[i].onclick = function()
                    {

											console.log('reached inside purchase trable');
                      
												 var idd=this.cells[0].innerHTML;

												// var idd='5';

												//  saveStorage(idd);
												localStorage.setItem('purchaseIdJavascript',idd);
												// sessionStorage.setItem('purchaseIdJavascripts',idd);

												//  localStorage.setItem('purchaseIdJavascript', this.cells[0].innerHTML);
										
												// var pageId=document.getElementById("pageId").value;
												// var recPerPageId=document.getElementById("recPerPageId").value;
												var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
												window.location.href = url;
                        //  purchaseIdForm();
										}
								}





</script>
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
<script src="js/custom.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>