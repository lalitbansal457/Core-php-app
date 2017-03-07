<div class="sidebar">
    <div class="sidebar_left_top">
	        <div class="services">
				<h3>Services</h3>
	      	<div class="services_list">
	      		<ul>
			  		<?php
			  			@include 'connectdb.php';
			  			$sql = "SELECT * from service order by id";
			  			$result = mysql_query($sql);
			  			//echo "$result";
			  			//echo "$row";
			  			while ($fetch = mysql_fetch_array($result)) {
			  		?>
			  		<li> <a href="services.php"> <?php echo $fetch['service_title']; ?> </a> </li>
			  		<?php  }  ?>
	    		</ul>
	        </div>
			</div>
		</div>
	 <div class="sidebar_left_bottom">
    	<div class="projects">
    		<h3>Projects</h3>
    		<div class="project_img">

	    	    <?php
	    	   		
	    	   		$sql = "SELECT * from project order by id limit 3";
	    	   		$result = mysql_query($sql);
	    	   		while ($fetch = mysql_fetch_array($result)) {
	    	   	?>

	    	   	<img src="admin/upload/<?php  echo $fetch['project_image']; ?> ">
	    	   	
	    	   	<?php } ?>
	    	    <div class="view-all"><a href="events.php">See All</a></div>
    	   </div>
    	</div>
	</div>
	</div>