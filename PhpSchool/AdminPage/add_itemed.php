<?php
$folder = "../images/";
$menu = isset($_POST['txtmenu']) ? $_POST['txtmenu'] : '';
$img = isset($_FILES['file']['name']) ? $_FILES['file']['name'] : '';
$size = isset($_POST['txtsize']) ? $_POST['txtsize'] : '';
$price = isset($_POST['txtprice']) ? $_POST['txtprice'] : '';
$point = isset($_POST['txtpoint']) ? $_POST['txtpoint'] : '';

include_once('config.php');
move_uploaded_file($_FILES['file']['tmp_name'], $folder . $img);

$sql = "INSERT INTO `tbl_item`(`pro_id`, `pro_menu`, `img`, `size`, `price`, `point`) VALUES (NULL,'$menu','$img','$size','$price','$point')";
$retval = mysqli_query($con, $sql);

if (!$retval) {
    die('Could not add: ' . mysqli_error($con));
}
else{
    include_once('selectItem.php');
}
?>
