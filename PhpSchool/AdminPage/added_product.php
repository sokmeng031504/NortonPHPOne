<?php
$folder="../images/";
$name=isset($_POST['txtname'])? $_POST['txtname']: '';
$img=isset($_FILES['file']['name'])?$_FILES['file']['name']: '';
$size=isset($_POST['txtsize'])? $_POST['txtsize']: '';
$price=isset($_POST['txtprice'])? $_POST['txtprice']: ''; 
$point=isset($_POST['txtpoint'])? $_POST['txtpoint']: '';
$txtType=isset($_POST['txtType'])? $_POST['txtType']: '';
$des=isset($_POST['txtdes'])? $_POST['txtdes']: '';
$discount=isset($_POST['txtDiscount'])? $_POST['txtDiscount']: '';
include_once('config.php');
move_uploaded_file($_FILES['file']['tmp_name'], $folder.$img);

$sql="INSERT INTO `tbl_adventure` (`pro_id`, `pro_name`, `img`, `size`, `price`, `point`,`type_product`,`discount`, `des`) VALUES (NULL, '$name', '$img', '$size', '$price', '$point','$txtType','$discount', '$des')";
$retval=mysqli_query($con, $sql);
if(!$retval){
    die('could not add: '.mysqli_error($con));
}
else{
    include_once('select.php');
}
// include_once('index.php');
?>