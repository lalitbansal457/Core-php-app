<?php
include("dbconfig.php");

unset($_SESSION['adminlogin']);
session_destroy();
print("<script>window.location='index.php';</script>");	

?>