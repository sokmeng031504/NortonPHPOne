<?php
if (include_once('./config.php')) {
    // File included successfully
    $id = isset($_REQUEST['proId']) ? $_REQUEST['proId'] : '' ;

    $folder = "../images/";
    $name1 = isset($_POST['txtname']) ? $_POST['txtname'] : '';
    $img1 = isset($_FILES['file']['name']) ? $_FILES['file']['name'] : '';
    $size1 = isset($_POST['txtsize']) ? $_POST['txtsize'] : '';
    $price1 = isset($_POST['txtprice']) ? $_POST['txtprice'] : '';
    $type1 = isset($_POST['txtType']) ? $_POST['txtType'] : '';
    $point1 = isset($_POST['txtpoint']) ? $_POST['txtpoint'] : '';
    $des1 = isset($_POST['txtdes']) ? $_POST['txtdes'] : '';
    include_once('config.php');
    move_uploaded_file($_FILES['file']['tmp_name'], $folder . $img1);
    $sql = "UPDATE `tbl_adventure` SET `pro_name`='$name1',`img`='$img1',`size`='$size1',`point`='$point1',`price`='$price1',`type_product`='$type1',`des`='$des1' WHERE `pro_id`='$id'";
    $retval = mysqli_query($con, $sql);
    if(!$retval) {
        die('could not add: ' . mysqli_error($con));
    } 
    header("Location: http://localhost:8088/Norton/Co3E1/PhpSchool/AdminPage/select.php");
}
?>