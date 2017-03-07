<?php
include("dbconfig.php");

$mid=$_POST['mid'];
$bname=$_POST['bname'];
$aname=$_POST['aname'];
$btype=$_POST['btype'];
$f1= $_FILES['image']['name'];
	$f2= $_FILES['image']['tmp_name'];
	$fol="upload/".$f1;
	move_uploaded_file($f2,$fol);
$price=$_POST['price'];
$buser=$_POST['buser'];
$quantity=$_POST['quantity'];
$bookd=$_POST['bookd'];



mysql_query("update bookdata set bname='".$bname."',aname='".$aname."',type='".$btype."',image='".$fol."',price='".$price."',user='".$buser."',quantity='".$quantity."',bookd='".$bookd."' where id='".$mid."'");

print("<script>window.location='tables.php';</script>");
?>