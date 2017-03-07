<?php
 //    include("include/connectdb.php");
 //    if(!isset($_SESSION['adminlogin'])) {
 //        print("<script>window.location='index.php';</script>");	
	// }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">

        <!-- Vendors -->
        <link rel="stylesheet" media="screen" href="vendors/easypiechart/jquery.easy-pie-chart.css">
        <link rel="stylesheet" media="screen" href="vendors/easypiechart/jquery.easy-pie-chart_custom.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-with-small-navbar">
      <?php include("navbar.php");  ?>
        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <?php include("sidenav.php");  ?>

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="page-header">
                            <h1>Dashboard</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="alert alert-success bootstrap-admin-alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully
                        </div>
                    </div>

                    <div class="row">
                        <div class="navbar navbar-default bootstrap-admin-navbar-thin">
                            <ol class="breadcrumb bootstrap-admin-breadcrumb">
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                                <li class="active">Tools</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="panel panel-default bootstrap-admin-no-table-panel">
                            <div class="panel-heading">
                                <div class="text-muted bootstrap-admin-box-title">Statistics</div>
                                <div class="pull-right"><span class="badge">View More</span></div>
                            </div>
                            <div class="bootstrap-admin-panel-content bootstrap-admin-no-table-panel-content collapse in">
                                <div class="col-md-3">
                                    <div class="easyPieChart" data-percent="73" style="width: 110px; height: 110px; line-height: 110px;">73%<canvas width="110" height="110"></canvas></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Visitors</span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="easyPieChart" data-percent="53" style="width: 110px; height: 110px; line-height: 110px;">53%<canvas width="110" height="110"></canvas></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Page Views</span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="easyPieChart" data-percent="83" style="width: 110px; height: 110px; line-height: 110px;">83%<canvas width="110" height="110"></canvas></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Users</span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="easyPieChart" data-percent="13" style="width: 110px; height: 110px; line-height: 110px;">13%<canvas width="110" height="110"></canvas></div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Orders</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    

                    
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include("footer.php"); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>

        <script type="text/javascript">
            $(function() {
                // Easy pie charts
                $('.easyPieChart').easyPieChart({animate: 1000});
            });
        </script>
    </body>
</html>