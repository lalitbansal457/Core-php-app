<?php
include("dbconfig.php")
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tables </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme-change-size.css">

        <!-- Datatables -->
        <link rel="stylesheet" media="screen" href="css/DT_bootstrap.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
		<style>
		a {
		border:1px solid black;}
		</style> 
		
    </head>
	<body>
	<div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<div class="btn-group pull-right">
            <a href="bookdata.php" class="btn btn-success btn-sm">add new</a></div>
                                <div class="text-muted bootstrap-admin-box-title">Book data</div>
                            </div>
<div class="bootstrap-admin-panel-content">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>bname</th>
                                            <th>aname</th>
                                            <th>type</th>
											<th>image</th>
                                            <th>price</th>
                                            <th>user</th>
											<th>quantity</th>
											<th>bookd</th>
                                        </tr>
<?php
$sql=mysql_query("select * from bookdata");

while($fty=mysql_fetch_array($sql))
{
?>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $fty['bname']; ?></td>
                                            <td><?php echo $fty['aname']; ?></td>
                                            <td><?php echo $fty['type']; ?></td>
											<td><img style="height:60px;width:80px;" src="<?php echo $fty['image']; ?>"></td>
                                            <td><?php echo $fty['price']; ?></td>
                                            <td><?php echo $fty['user']; ?></td>
                                            <td><?php echo $fty['quantity']; ?></td>
											<td><?php echo $fty['bookd']; ?></td>
                                        </tr>
                                        
                                    </tbody>
									<?php } 
								 ?>
                                </table>
                            </div>
                        </div>
                    </div>
					</body>
					</html>