<?php
    include("include/connectdb.php");

    $sql = "SELECT * from market where id = $_GET[uid]";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forms </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">

        <!-- Vendors -->
        <link rel="stylesheet" media="screen" href="vendors/bootstrap-datepicker/css/datepicker.css">
        <link rel="stylesheet" media="screen" href="css/datepicker.fixes.css">
        <link rel="stylesheet" media="screen" href="vendors/uniform/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" media="screen" href="css/uniform.default.fixes.css">
        <link rel="stylesheet" media="screen" href="vendors/chosen.min.css">
        <link rel="stylesheet" media="screen" href="vendors/selectize/dist/css/selectize.bootstrap3.css">
        <link rel="stylesheet" media="screen" href="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css">

        <style>
            img {
                max-width: 100%;
            }
        
            th,td {
                text-align: center;
                padding: 10px;            
            }
            .hide {
                visibility: hidden;
            }

        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        <!-- small navbar -->
        <?php include("navbar.php");  ?>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                 <?php include("sidenav.php");  ?>

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="page-header clearfix">
                            <h1 class="pull-left">Marketing form</h1>
                            <a href="add_market.php" class="btn btn-primary pull-right">Add market</a>
                        </div>
                    </div>                    
                    <form class="form-horizontal" method="post" action="u_1.php" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Marketing</legend>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="typeahead">Id </label>
                                <div class="col-lg-10">
                                    <input type="text" class="col-md-6 hide" name="uid" value="<?php echo $_GET['uid'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="typeahead">Market title </label>
                                <div class="col-lg-10">
                                    <input type="text" class="col-md-6" name="market_title" value="<?php echo $row['market_title'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="typeahead">Market description </label>
                                <div class="col-lg-10">
                                    <textarea name="market_description" id="" cols="55" rows="10">
                                        <?php echo $row['market_description'] ?>"
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="typeahead">Market image </label>
                                <div class="col-lg-10">
                                    <input type="file" class="col-md-6" name="market_image" value="<?php echo $row['market_image']; ?>">
                                    <img src="<?php echo "upload/$row[market_image]"; ?>">
                                </div>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="submit" class="btn btn-primary">Add market </button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- footer -->
         <?php include("footer.php");  ?>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
        <script type="text/javascript" src="vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3.js"></script>
        <script type="text/javascript" src="vendors/boostrap3-typeahead/bootstrap3-typeahead.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $('.datepicker').datepicker();
                $('.uniform_on').uniform();
                $('.chzn-select').chosen();
                $('.selectize-select').selectize();
                $('.textarea-wysihtml5').wysihtml5({
                    stylesheets: [
                        'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
                    ]
                });

                $('#rootwizard').bootstrapWizard({
                    'nextSelector': '.next',
                    'previousSelector': '.previous',
                    onNext: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onPrevious: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.bar').css({width: $percent + '%'});
                    }
                });
                $('#rootwizard .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
                });
            });
        </script>
    </body>
</html>
