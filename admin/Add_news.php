<?php

	@include 'include/connectdb.php';

	if (isset($_POST['submit'])) {
		
		$news_date = $_POST['news_date'];
		$news_description = substr($_POST['news_description'],0,150);
		//echo "$news_description ";
		//echo "$news_date";

		$sql = "INSERT into news (news_date, news_description) VALUES ('$news_date', '$news_description')";
		//echo "$sql";
		if (mysql_query($sql)) {
			header("location: latest_news.php");
		}
	}


?>