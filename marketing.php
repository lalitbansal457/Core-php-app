<!DOCTYPE HTML>
<head>
<title>Free House Framing Contruction Services Website Template | Marketing :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
    <body>
	   <?php @include 'include/header.php'; ?>
	  <div class="main">  
	   <div class="wrap">  		 	       
         <div class="services_grid">
		      <div class="content_bottom">
		      				<?php
		      					@include 'include/connectdb.php';
		      					$sql = "SELECT * from market";
		      					$result = mysql_query($sql);

		      					while ($fetch = mysql_fetch_array($result)) {
		      						$market_image = $fetch['market_image'];
		      						$market_title = $fetch['market_title'];
		      						$market_description = $fetch['market_description'];

		      				?>
		         			<div class="image group marketing">
								<div class="grid images_3_of_1">
									<a href="#"><img src="<?php echo "admin/upload/$market_image"; ?>" alt=""></a>
								</div>
								<div class="grid blog-desc">
									<h4><a href="#"> <?php echo "$market_title"; ?> </a></h4>
									<p><?php echo "$market_description"; ?></p>
									<div class="view-all"><a href="events.php">More Info</a></div>
								</div>
		  				    </div>
		  				    <?php } ?>
		      			 </div>
    				</div>
    		<?php @include 'include/left_bar.php'; ?>
    <div class="clear"></div>
 </div>
</div>
    <?php @include 'include/footer.php'; ?>
 </div>	
</body>
</html>

