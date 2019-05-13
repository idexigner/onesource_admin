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
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- <script src="js/jquery-2.1.4.min.js"></script> -->
    <!-- //jQuery -->
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="css/table-style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css/basictable.css" /> -->
    <!-- <script type="text/javascript" src="js/jquery.basictable.min.js"></script> -->

    <!-- //tables -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
        type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->


    <style>
        thead input {
            width: 100%;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

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

<body>
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
								<br>
						<div class="form-group">
									<!-- <label for="formSelection">(select one):</label> -->
									<select class="form-control" id="formSelection" >
										<option value="Purchase">Purchase</option>
										<option value="Sale">Sale</option>
										<option value="Available">Available</option>
										<option value="Require">Require</option>
									</select>
						</div>

                <!--------------------------------------------------------------------------------------------------------------------
Purchase table Start
------------------------>
<div id="purchaseDiv">

                <div class="agile-grids">
                    <!-- tables -->

                    <div class="agile-tables">
                        <div class="w3l-table-info w3l-table-hover">
                            <h2>Purchase</h2>

                            <table id="purchaseWholeTable" class="display" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Range</th>
                                        <th>Society Name</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
                                <tbody id="purchaseTableBody">


                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Range</th>
                                        <th>Society Name</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>User</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>


                    </div>
								</div>
								
</div>
                <!--------------------------------------------------------------------------------------------------------------------
Purchase table End
------------------------>





                <!--------------------------------------------------------------------------------------------------------------------
Sale table Start
------------------------>
<div id="saleDiv">
                <div class="agile-grids">
                    <!-- tables -->

                    <div class="agile-tables">
                        <div class="w3l-table-info w3l-table-hover">
                            <h2>Sale</h2>

                            <table id="saleWholeTable" class="display" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Society Name</th>
                                        <th>Demand</th>
                                        <th>Type</th>
                                        <th>Direction</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody id="saleTableBody">


                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Society Name</th>
                                        <th>Demand</th>
                                        <th>Type</th>
                                        <th>Direction</th>
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>


                    </div>
                </div>
</div>


                <!--------------------------------------------------------------------------------------------------------------------
Sale table End
------------------------>








                <!--------------------------------------------------------------------------------------------------------------------
Available table Start
------------------------>

<div id="availableDiv">
                <div class="agile-grids">
                    <!-- tables -->

                    <div class="agile-tables">
                        <div class="w3l-table-info w3l-table-hover">
                            <h2>Available</h2>

                            <table id="availableWholeTable" class="display" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Society Name</th>
                                        <th>Type</th>
                                        <th>Demand</th>
                                        <th>Area</th>
                                        <th>Direction</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody id="availableTableBody">


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Society Name</th>
                                        <th>Type</th>
                                        <th>Demand</th>
                                        <th>Area</th>
                                        <th>Direction</th>
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>


                    </div>
                </div>
</div>

                <!--------------------------------------------------------------------------------------------------------------------
Available table End
------------------------>






                <!--------------------------------------------------------------------------------------------------------------------
Required table Start
------------------------>


<div id="requireDiv">
                <div class="agile-grids">
                    <!-- tables -->

                    <div class="agile-tables">
                        <div class="w3l-table-info w3l-table-hover">
                            <h2>Require</h2>

                            <table id="requireWholeTable" class="display" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Range</th>
                                        <th>Society Name</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody id="requireTableBody">


                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Range</th>
                                        <th>Society Name</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>


                    </div>
                </div>
</div>


                <!--------------------------------------------------------------------------------------------------------------------
Required table End
------------------------>










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
                <ul id="menu">
                <?php
										include 'menu.php';
									?>

                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- script-for sticky-nav -->
    <script>
        $(document).ready(function () {
            var navoffeset = $(".header-main").offset().top;
            $(window).scroll(function () {
                var scrollpos = $(window).scrollTop();
                if (scrollpos >= navoffeset) {
                    $(".header-main").addClass("fixed");
                } else {
                    $(".header-main").removeClass("fixed");
                }
            });

        });
    </script>






    <script>

			$(document).ready(function(){

				$('#purchaseWholeTable thead tr').clone(true).appendTo('#purchaseWholeTable thead');
        $('#purchaseWholeTable thead tr:eq(1) th').each(function (i) {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

            $('input', this).on('keyup change', function () {
                if (table.column(i).search() !== this.value) {
                    table
                        .column(i)
                        .search(this.value)
                        .draw();
                }
            });
        });

        var table = $('#purchaseWholeTable').DataTable({
            orderCellsTop: true,
            fixedHeader: true
				});
				
			});

        // $(document).ready(function () {
        //     // Setup - add a text input to each footer cell
        //     $('#purchaseWholeTable thead tr').clone(true).appendTo('#purchaseWholeTable thead');
        //     $('#purchaseWholeTable thead tr:eq(1) th').each(function (i) {
        //         var title = $(this).text();
        //         $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

        //         $('input', this).on('keyup change', function () {
        //             if (table.column(i).search() !== this.value) {
        //                 table
        //                     .column(i)
        //                     .search(this.value)
        //                     .draw();
        //             }
        //         });
        //     });

        //     var table = $('#purchaseWholeTable').DataTable({
        //         orderCellsTop: true,
        //         fixedHeader: true
        //     });
        // });


        // $(document).ready(function () {
        //     // Setup - add a text input to each footer cell
        //     $('#saleWholeTable thead tr').clone(true).appendTo('#saleWholeTable thead');
        //     $('#saleWholeTable thead tr:eq(1) th').each(function (i) {
        //         var title = $(this).text();
        //         $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

        //         $('input', this).on('keyup change', function () {
        //             if (table.column(i).search() !== this.value) {
        //                 table
        //                     .column(i)
        //                     .search(this.value)
        //                     .draw();
        //             }
        //         });
        //     });

        //     var table = $('#saleWholeTable').DataTable({
        //         orderCellsTop: true,
        //         fixedHeader: true
        //     });
        // });

        // $(document).ready(function () {
        //     // Setup - add a text input to each footer cell
        //     $('#availableWholeTable thead tr').clone(true).appendTo('#availableWholeTable thead');
        //     $('#availableWholeTable thead tr:eq(1) th').each(function (i) {
        //         var title = $(this).text();
        //         $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

        //         $('input', this).on('keyup change', function () {
        //             if (table.column(i).search() !== this.value) {
        //                 table
        //                     .column(i)
        //                     .search(this.value)
        //                     .draw();
        //             }
        //         });
        //     });

        //     var table = $('#availableWholeTable').DataTable({
        //         orderCellsTop: true,
        //         fixedHeader: true
        //     });
        // });

        // $(document).ready(function () {
        //     // Setup - add a text input to each footer cell
        //     $('#requireWholeTable thead tr').clone(true).appendTo('#requireWholeTable thead');
        //     $('#requireWholeTable thead tr:eq(1) th').each(function (i) {
        //         var title = $(this).text();
        //         $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

        //         $('input', this).on('keyup change', function () {
        //             if (table.column(i).search() !== this.value) {
        //                 table
        //                     .column(i)
        //                     .search(this.value)
        //                     .draw();
        //             }
        //         });
        //     });

        //     var table = $('#requireWholeTable').DataTable({
        //         orderCellsTop: true,
        //         fixedHeader: true
        //     });
        // });


    </script>



    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>


    
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({ "position": "absolute" });
            }
            else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({ "position": "relative" });
                }, 400);
            }

            toggle = !toggle;
        });
    </script>
    <!--js -->
    <script src="js/tableLoad.js" ></script>
    <script src="js/custom.js"></script>
    <!-- <script src="js/jquery.nicescroll.js"></script> -->
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- /Bootstrap Core JavaScript -->
    
   

    <script>
        window.onload = onLoadFunction('viewDetail');
    </script>

</body>

</html>