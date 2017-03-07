<?php

	if (isset($_SESSION[username])) {
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
		@include 'include/header.php';
	?>
	<div class="main">
		<div class="wrap">
			<?php
				@include 'include/left_bar.php';
			?>
			<div class="content">
		    	<div class="login_form">        		
		    		<form action="register.php" method="post" enctype="multipart/form-data">
			    		<div>
						   <span><label>First name</label></span>
						   <span><input name="fname" type="text" class="textbox"></span>
					    </div>
					    <div>
						   <span><label>Last name</label></span>
						   <span><input name="lname" type="text" class="textbox"></span>
					    </div>
					    <div>
						   <span><label>User name</label></span>
						   <span><input name="uname" type="text" class="textbox"></span>
					    </div>
					    <div>
						   <span><label>Email</label></span>
						   <span><input name="email" type="text" class="textbox"></span>
					    </div>
			        	<div>
						   <span><label>Password</label></span>
						   <span><input name="pass" type="password"></span>
					    </div>
					    <div>
						   <span><label>Confirm password</label></span>
						   <span><input name="cpass" type="text" class="textbox"></span>
					    </div>
					    <div>
						   <span><label>Gender</label></span>
						   <span><input name="gender" type="radio" value="Male" ></span>
						   <span><input name="gender" type="radio" value="Female" ></span>
					    </div>
					    <div>
						   <span><label>Decription</label></span>
						   <span> <textarea name="description" cols="30" rows="10"></textarea> </span>
					    </div>
					    <div>
						   <span><label>Image</label></span>
						   <span> <input type="file" name="image"> </span>
					    </div>
					    
		        	  <div>
						 <span><input type="submit" name="submit" class="mybutton" value="Submit"></span>
					  </div>
		        	  
		          </form>
		    	  	   <h4>Have account <a href="#">Click here</a></h4>
		    	</div>	
			</div>
			<?php
				@include 'include/right_bar.php';
			?>	
		</div>
	</div>
</body>


<?php
	@include 'include/connectdb.php';
	

	if(isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$gender = $_POST['gender'];
		$description = $_POST['description'];
		// $f1 = $_FILES['image']['name'];
		// $f2 = $_FILES['image']['temp_name'];
		// $fol = "upload/".$f1;
		// move_uploaded_file($f2, $fol);


		$fileName = $_FILES["image"]["name"]; 
		$fileTmpLoc = $_FILES["image"]["tmp_name"];
		// Path and file name
		$pathAndName = "upload/".$fileName;
		// Run the move_uploaded_file() function here
		$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
		// Evaluate the value returned from the function if needed
		

		$sql = "INSERT into register (first_name, last_name, username, email, password, confirm_password, gender, description, image, upload) VALUES ('$fname', '$lname', '$uname', '$email', '$pass', '$cpass', '$gender', '$description', '$fileName', '$pathAndName')";

		 // mysql_query("INSERT into register set first_name='".fname."', last_name='".lname."'");
		
		if(mysql_query($sql)) {
			echo "$sql";
		}
	
	}
?>