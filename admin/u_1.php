<?php
    @include 'include/connectdb.php';
    if (isset($_POST['submit'])) {
        $uid = $_POST['uid'];
        $market_title = $_POST['market_title'];
        $market_description = $_POST['market_description'];
        $market_image = $_FILES['market_image']['name'];
        $temp_file = $_FILES['market_image']['tmp_name'];
        $fileLocation = "upload/".$market_image;
        echo "$market_title</br>";
        echo "$market_description</br>";
        echo "$market_image</br>";
        echo "$uid";
        

        $moveFile = move_uploaded_file($temp_file, $fileLocation);

        $sql = "UPDATE market set market_title = '$market_title', market_description = '$market_description', market_image = '$market_image' where id = '$uid' ";
        echo "$sql";
        if (mysql_query($sql)) {
            echo "Updated";
        }
        

    }
?>