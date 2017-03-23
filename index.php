<?php

	@include 'include/connectdb.php';

	if (isset($_SESSION['username'])) {
		header("location: welcome.php");
	}
	
?>
<!DOCTYPE HTML>
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
	<?php 		 
	    @include 'include/slider.php' ;
	?>
	<div class="main">  
	   	<div class="wrap"> 
		   	<?php 		 
		        @include 'include/left_bar.php' ;
		    ?>
		        <div class="content">
				      <div class="content_bottom">
				      	<h2>Welcome to our company</h2>
				      	<h3>Lorem Ipsum is simply dummy text of the printing atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</h3>
				      	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				      	<p>Atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				      	     <div class="feature_list">
				      	     	<h2>Featured Services</h2>
				      		    <ul>
							  		<li>Duis aute irure dolor Sunt in culpa</li>
							  		<li>Sunt in culpa qui officia vel illum</li>
							  		<li>vel illum qui dolorem eum The wise</li>
							  		<li>The wise man therefore Lorem ipsum</li>
							  		<li>vel illum qui dolorem eum The wise</li>
				               </ul>
				      	   </div>
				      	   	  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia.</p>
				      </div>
		    	</div>
			<?php 		 
		     	@include 'include/right_bar.php' ;
	    	?>
    		<div class="clear"></div>
 		</div>
	</div>
	<?php 		 
     	@include 'include/footer.php';
	?>
</body>
</html>

	