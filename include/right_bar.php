<div class="sidebar">
    <div class="sidebar_right_top">
 	  	<h3>Latest News</h3>
 	   	<div class="latestnews">

 	   		<?php
 	   			@include 'connectdb.php';

 	   			$sql = "SELECT * from news" ;
 	   			$result = mysql_query($sql);

 	   			while ( $fetch = mysql_fetch_array($result)) {

 	   		?>
 	   		<div class="latestnews_desc">
   				<h4> <?php echo $fetch['news_date']; ?> </h4>
   				<p> <?php echo $fetch['news_description']; ?> </p>
   			</div>

   			<?php } ?>
	     	<div class="view-all"><a href="events.php">ViewAll</a></div>
      	</div>	
    </div>
    <div class="sidebar_right_bottom">
    	<h3>Member Login</h3>
    	<div class="login_form">        		
    		<form action="login.php" method="post">
    		 <div>
			   <span><label>User Name</label></span>
			   <span><input name="userName" type="text" class="textbox"></span>
		     </div>
        	 <div>
			   <span><label>Password</label></span>
			   <span><input name="userPass" type="password"></span>
		     </div>
        	  <div>
				 <span><input type="submit" class="mybutton" name="submit" value="Submit"></span>
			  </div>
        	  <span><a href="#">Forgot Password ?</a></span>
          </form>
    	  	   <h4>Free registration <a href="register.php">Click here</a></h4>
    	</div>
     </div>
</div>