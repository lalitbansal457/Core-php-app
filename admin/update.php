<?php
include("dbconfig.php");
$sql=mysql_query("select * from bookdata where id='".$_GET['uid']."'");
$fty=mysql_fetch_array($sql);
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
                        <div class="page-header">
                            <h1>book form</h1>
                        </div>
                    </div>

                    
                                <form class="form-horizontal" method="post" action="u.php" enctype="multipart/form-data">
								<input type="hidden" name="mid" value="<?php echo $_GET['uid']; ?>" /> 
                                    <fieldset>
                                        <legend>book details</legend>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="typeahead" >Book Name </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control col-md-6" name="bname" value="<?php echo $fty['bname']; ?>">
                                                
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label class="col-lg-2 control-label" for="typeahead" >Author's Name </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control col-md-6" name="aname" value="<?php echo $fty['aname']; ?>">
                                                
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label class="col-lg-2 control-label" for="typeahead" >Book user </label>
                                            <div class="col-lg-10">
                                          
                                                <select id="select01" class="chzn-select" style="width: 150px" name="buser" value="<?php echo $fty['user']; ?>">
                                                    <option>select</option>
                                                    <option>student</option>
                                                    <option>teacher</option>
                                                    <option>religious</option>
                                                    <option>other</option>
                                                </select>
                                           
                                                
                                            </div>
                                        </div>
										
										
										 <div class="form-group">
                                            <label class="col-lg-2 control-label" for="typeahead" >Book Type </label>
                                            <div class="col-lg-10">
                                          
                                                <select id="select01" class="chzn-select" style="width: 150px" name="btype" value="<?php echo $fty['type']; ?>">
                                                    <option>select</option>
                                                    <option>course</option>
                                                    <option>advance</option>
                                                    <option>kids</option>
                                                    <option>comics</option>
                                                </select>
                                           
                                                
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="fileInput" >File input</label>
                                            <div class="col-lg-10">
                                                <input class="form-control uniform_on" id="fileInput" type="file" name="image" value="<?php echo $fty['image']; ?>">
                                            </div>
                                        </div>
										
										
										 <div class="form-group">
                                            <label class="col-lg-2 control-label" for="typeahead" >price </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control col-md-6" name="price" value="<?php echo $fty['price']; ?>">
                                                
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="select01" >Quantity</label>
                                            <div class="col-lg-10">
                                                <select id="select01" class="chzn-select" style="width: 150px" name="quantity" value="<?php echo $fty['quantity']; ?>">
                                                    <option>something</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-lg-2 control-label" for="textarea-wysihtml5" >book description</label>
                                            <div class="col-lg-10">
                                                <textarea id="textarea-wysihtml5" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px" name="bookd" value="<?php echo $fty['bookd']; ?>"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        <center><button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="reset" class="btn btn-default">Cancel</button></center>
                                    </fieldset>
                                </form>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
