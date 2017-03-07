<?php
	@include 'include/connectdb.php';

	if (isset($_POST['submit'])) {
		
		$file_name = $_FILES["project_image"]["name"];
		$file_tem_loc = $_FILES["project_image"]["tmp_name"];
		//echo "$file_name";
		$path_and_name = "upload/".$file_name;
		echo "<br> $path_and_name";
		$move_file = move_uploaded_file($file_tem_loc, $path_and_name);
	

		$sql = "INSERT into project (project_image, image_path) VALUES ('$file_name', '$path_and_name') ";
		$result = mysql_query($sql);

		

	}

?>