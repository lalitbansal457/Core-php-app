<?php
	@include 'include/connectdb.php';
	unset($_SESSION[username]);
	echo $_SESSION[username];
	session_destroy();
	//header("location: index.php");
	
?>