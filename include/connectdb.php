<?php
	$mysql_connect = mysql_connect('localhost', 'root', '') or die(mysql_error());
	$mysql_db = mysql_select_db('house_framing_pack');

	session_start();
?>