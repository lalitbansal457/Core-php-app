<!DOCTYPE HTML>

<?php
	
	@include 'include/connectdb.php';

	

	if (!isset($_SESSION['username'])) {
		header("location: index.php");	
	}
	else {



	$uname = $_SESSION['username'];

	$sql = "SELECT * from register where username = '$uname'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);


?>
<html>
	<head>
	<title>Free House Framing Contruction Services Website Template | Home :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    </script>
	</head>
<body>
	<?php 		 
	    @include 'include/header.php' ;
	?>
	<div class="main">  
	   	<div class="wrap"> 
		   	<?php 		 
		        @include 'include/left_bar.php' ;
		    ?>
		    <div class="content">
		    	<span> Welcome <?php echo $row[username] ?>. </span>
		    	<span>Your password is  <?php echo $row[password] ?> </span>

		    	<p>
		    		<a href="logout.php">
		    			Logout
		    		</a>
		    	</p>
		    </div>
		    <?php 		 
		        @include 'include/right_bar.php' ;
		    ?>
		</div>
	</div>
<body>

</body>
</html>

<?php } ?>