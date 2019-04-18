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
 
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info w3l-table-hover">
					  <h2>User Data</h2>
					    <!--<table id="table" class="table-hover" data-toggle="modal" data-target="#smallmodal"  >-->
                            <table id="table" class="table-hover">
						<thead>
						  <tr>
							<th>ID</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Address</th>
							<th>Username</th>
							<th>Password</th>
							<th>Email</th>
							<th>Contact</th>
                            <th>Role</th>							
						  </tr>
						</thead>
                        
						<tbody>
<?php
include ('backend/DBConfig.php');
$rec_per_page = 115;

$q = mysqli_query($con,"select * from users where role!='guest'");
$TotalRocord=mysqli_num_rows($q);

if(@$_GET['page'])
{
$page = $_GET['page'];
}
else
{
$page=1;    
}
$totalpages=ceil($TotalRocord/$rec_per_page);

$startfrom = $rec_per_page*($page-1);

$query = mysqli_query($con,"select * from users limit $startfrom,$rec_per_page");

// $q = mysqli_query($con,"select * from users");
while($rows = mysqli_fetch_array($q))
{
    ?>
                                        <tr >
                                            <td><?php echo $rows['u_id']?></td>
                                            <td><?php echo $rows['name']?></td>
                                            <td><?php echo $rows['fatherName']?></td>
                                            <td><?php echo $rows['address']?></td>
                                            <td><?php echo $rows['username']?></td>
                                            <td><?php echo $rows['pass']?></td>
                                            <td><?php echo $rows['email']?></td>
                                            <td><?php echo $rows['contact']?></td>
                                            <td><?php echo $rows['role']?></td>

                                            <!--<td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>-->
                                        </tr>

                                        <?php
}

    ?>
                         
						</tbody>
                        
					  </table>







            <button type="button" style="display:none;" id="openModal" data-toggle="modal" data-target="#smallmodal">Open Modal</button>


<div class="modal" id="smallmodal" style="z-index:10000" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">User Update</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="backend/buserUpdate.php" method="POST"class="form-horizontal" onSubmit="alert('Successfully Updated')">
                                                            <!--<div class="row form-group">
                                                                <div class="col col-md-12"><label for="text-input" class=" form-control-label">Domain ID: </label><span id="domainId"></span></div>
                                                                
                                                            </div>  -->

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">User ID: </label> <span id="userId2"></span></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="hidden"  id="userId" name="userId" placeholder="Enter Domain" class="form-control" >
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="modalUsername" name="username" placeholder="Enter username" class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>
                                                            <div class="row form-group" style="background-color:white;">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text" id="modalPass" name="pass" placeholder="Enter pass" class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label style="background-color:white;" for="text-input" class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text" id="modalEmail" name="email" placeholder="Enter email" class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text" id="modalContact" name="contact" placeholder="Enter contact" class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            



                                                         <div class="row form-group">
                                                                    <div class="col col-md-3"></div>
                                                                    <div class="col-12 col-md-9" style="background-color:white;">
                                                                         <input type="submit"  name="submit2" class="btn btn-danger "  style="float:right;display:inline" value="Delete">
                                                                        <input type="submit"  name="submit" class="btn btn-primary "  style="float:right;display:inline;margin-right:3%;" value="Update">
                                                                        
                                                                        <!--<input type="submit"  name="submit" class="btn btn-primary "  style="float:right" value="Update">-->
                                                                        
                                                                        </div>
                                                                </div>

                                </form>


								<div class="row">
									<div class="col-md-6">
										<form action="viewDetails.php" method="POST">
										<input type="hidden"  id="userId3" name="userId3" placeholder="Enter Domain" class="form-control" >
										<input type="submit" name="inSubmit" class="btn btn-info" data-toggle="modal" value="See list of values"> 
										</form>
									 </div>
									
									<div class="col-md-3"></div>
									<div class="col-md-3"></div>
								</div>
                            </div>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>-->
                        </div>
                    </div>
                </div>








				<div class="modal" id="incomeModal" style="z-index:10001" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Expected Income</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
						 <table id="table2" class="table-hover" data-toggle="modal" data-target="#smallmodal"  >
						<thead>
						  <tr>
							<th>ID</th>
							<th>Title</th>
							<th>Source</th>
							<th>Expected Income</th>
							<th>Detail</th>							
						  </tr>
						</thead>
                        
						<tbody>
<?php
include ('backend/DBConfig.php');
// session_start();
// $u=$_SESSION['user_id'];

echo "<script type='text/javascript'>console.log('vvvasdasd')</script>";
if(isset($_POST['inSubmit'])){
       $iduse= $_POST['userId3'];


// $u =  "<script type='text/javascript'>document.getElementById('userId').value</script>";
// echo "<script type='text/javascript'>console.log(".$use.")</script>";
// echo "<script type='text/javascript'>console.log(".$use2.")</script>";

//$iduse= '<%= Session["UserName2"] %>';

$q = mysqli_query($con,"select * from income where u_id=". $iduse);

while($rows = mysqli_fetch_array($q))
{
    ?>
                                        <tr >
                                            <td><?php echo $rows['i_id']?></td>
                                            <td><?php echo $rows['i_title']?></td>
                                            <td><?php echo $rows['i_source']?></td>
                                            <td><?php echo $rows['i_expected_income']?></td>
                                            <td><?php echo $rows['i_details']?></td>

                                            <!--<td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>-->
                                        </tr>

                                        <?php
}
  }

    ?>
                         
						</tbody>
                        
					  </table>



                            </div>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>-->
                        </div>
                    </div>
                </div>

					</div>
				  <!--<code class="js">
					$('#table').basictable();
				  </code>
		
				 

				  <code class="js">
					$('#table-breakpoint').basictable({<br>
					&nbsp;&nbsp;&nbsp;&nbsp;breakpoint: 768,<br>
					});
				  </code>-->
			
			</div>








<script>

var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      document.getElementById("openModal").click();
                      // $('#smallmodal').show();
                         //rIndex = this.rowIndex;
                         console.log( this.cells[0].innerHTML);
                         console.log( this.cells[1].innerHTML);

						//  <span class="bt-content">Has</span>


						var temp = this.cells[0].innerHTML;

                         document.getElementById("userId").value = temp.slice(25,temp.length-7);
                        document.getElementById("userId2").innerHTML = temp.slice(25,temp.length-7);
						 document.getElementById("userId3").value = temp.slice(25,temp.length-7);



						 
						 

                          temp = this.cells[1].innerHTML;
						  document.getElementById("modalUsername").value=temp.slice(25,temp.length-7);

						  
                          temp = this.cells[2].innerHTML;
						  document.getElementById("modalPass").value=temp.slice(25,temp.length-7);

                          temp = this.cells[3].innerHTML;
							document.getElementById("modalContact").value =temp.slice(25,temp.length-7);

                         temp = this.cells[4].innerHTML;
						 document.getElementById("modalEmail").value =temp.slice(25,temp.length-7);
                        //  document.getElementById("modalUsername").value = this.cells[5].innerHTML;

						
              

                        
                        };
                   
                    };
                   
                
                console.log("check");


</script>








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
<!-- <script src="js/jquery.nicescroll.js"></script> -->
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
   <script src="js/custom.js"></script>
   <script src="js/tableLoad.js"></script>

   <script>
        window.onload = onLoadFunction('viewUser');
    </script>

</body>
</html>