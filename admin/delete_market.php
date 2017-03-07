<?php
	@include 'include/connectdb.php';
	if (isset($_GET['del'])) {
		$sql = "DELETE from market where id='$_GET[del]' ";
		echo "$sql";
		if (mysql_query($sql)) {
			echo "deleted";
		}
	}
	

?>