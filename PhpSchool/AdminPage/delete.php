<?php
if (include_once ('./config.php')) {
    // File included successfully
    $id1 = $_GET['pro_id'];
    $sql = "DELETE FROM tbl_adventure WHERE `tbl_adventure`.`pro_id` = '$id1'";
    $result = mysqli_query($con, $sql);
    if(!$result){
        die('Error'.mysqli_error($con));
    }
    else{
        header("location:select.php");
    }
} else {
    // Handle the error or display a message
    die("Failed to include 'added_product.php'");
}

