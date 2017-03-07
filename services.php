<!DOCTYPE HTML>
<head>
<title>Free House Framing Contruction Services Website Template | Services :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
	<?php 		 
	    @include 'include/header.php' ;
	?>
		<div class="main">  
		    <div class="wrap">  		 	       
	        <div class="services_grid">
			      <div class="content_bottom">
			      		<div class="section group service_desc">
			      		<?php 
			      			@include 'include/connectdb.php';
			      			$sql = "SELECT * from service order by id";
			      			$result = mysql_query($sql);

			      			while ( $fetch = mysql_fetch_array($result)) {
			      		?>
				      
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="<?php echo "images/".$fetch['icon_path'];?>" alt="" />
								</div>
							    <div class="text list_2_of_1">
									<h4><?php echo $fetch['service_title']; ?></h4>
									<p>
										<?php
											echo $fetch['service_description'];
										?>
									</p>
									<div class="view-all"><a href="events.php">More Info</a></div>
							   </div>
						   	</div>			

						<?php } ?>
						
						</div>
			   </div>
	    	</div>
    <?php 		 
	    @include 'include/left_bar.php' ;
	?>
	<div class="clear"></div>
 </div>
</div>
    
</body>
</html>

