<?php
	session_start();
	@include 'include/connectdb.php';

	if (isset($_POST['submit'])) {
		$uname = $_POST['userName'];
		$upass = $_POST['userPass'];

		$sql = "SELECT * from register where username = '$uname' AND password = '$upass'";
		$result = mysql_query($sql);
		
		$row = mysql_fetch_array($result);
		echo $row;
		if($row == null) {
			echo "vcsdc";
		}
		//exit;
		if ($row[username] == $uname) {
			$_SESSION['username'] = $uname;
			header("location: welcome.php");
		}
		else {
			header("location: index.php");
		}
	}
?>