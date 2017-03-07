<?php

// include("dbconfig.php");
// $bname=$_POST['bname'];
// $aname=$_POST['aname'];
// $btype=$_POST['btype'];
// $f1= $_FILES['image']['name'];
// 	$f2= $_FILES['image']['tmp_name'];
// 	$fol="upload/".$f1;
// 	move_uploaded_file($f2,$fol);
// $price=$_POST['price'];
// $buser=$_POST['buser'];
// $quantity=$_POST['quantity'];
// $bookd=$_POST['bookd'];
// mysql_query("insert into bookdata set bname='".$bname."',aname='".$aname."',type='".$btype."',image='".$fol."',price='".$price."',user='".$buser."',quantity='".$quantity."',bookd='".$bookd."'");
 
// print("<script>window.location='bookdata.php';</script>");


	@include 'include/connectdb.php';

	if (isset($_POST['submit'])) {
		$service_title = $_POST['service_title'];
		$service_description = $_POST['service_description'];
		$service_icon = $_FILES['service_icon']['name'];
		$tmp_name = $_FILES['service_icon']['tmp_name'];
		$fileLocation = "../upload/".$service_icon;

		$move_file = move_uploaded_file($tmp_name, $fileLocation);

		$sql = "INSERT into service (service_title, service_description, icon_path) VALUES ('$service_title', '$service_description', '$service_icon')";

		if (mysql_query($sql)) {
			echo "Service inserted successfully";
			print("<script>window.location='services.php';</script>");
		}

	}
?>
