<?php
	@include 'include/connectdb.php';

	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql = mysql_query("select * from admin where username='$email' and password='$pass'");
	$num = mysql_num_rows($sql);

	if($num>0) {
		$fetch=mysql_fetch_array($sql);
		$_SESSION['adminlogin']=$fetch['id'];
		print("<script>window.location='dashboard.php';</script>");	
	}else {
		$_SESSION['adminerror']="username and password incorrect";
		print("<script>window.location='index.php';</script>");	
	}
?>