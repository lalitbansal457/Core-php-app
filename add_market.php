<?php 
	@include 'include/connectdb.php';

	

	if (isset($_POST['submit'])) {
		$market_title = $_POST['market_title'];
		$market_description = $_POST['market_description'];
		$market_image = $_FILES['market_image']['name'];
		$temp_image = $_FILES['market_image']['tmp_name'];
		$fileLocation = "upload/".$market_image;
		$moveFile = move_uploaded_file($temp_image, $fileLocation);

		$sql = "INSERT into market (market_title, market_description, market_image) VALUES ('$market_title', '$market_description', '$market_image') ";
		if (mysql_query($sql)) {
			echo "inserted";
		}
	}



	

?>