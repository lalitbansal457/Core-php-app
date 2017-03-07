
<?php
include("dbconfig.php");
mysql_query("delete from bookdata where id='".$_GET['did']."'");
print("<script>window.location='tables.php';</script>");


?>