<?php
$folder="../images/";
$name=isset($_POST['txtname'])? $_POST['txtname']: '';
$img=isset($_FILES['file']['name'])?$_FILES['file']['name']: '';
$size=isset($_POST['txtsize'])? $_POST['txtsize']: '';
$price=isset($_POST['txtprice'])? $_POST['txtprice']: ''; 
$point=isset($_POST['txtpoint'])? $_POST['txtpoint']: '';
$txtType=isset($_POST['txtType'])? $_POST['txtType']: '';
$des=isset($_POST['txtdes'])? $_POST['txtdes']: '';
include_once('config.php');
move_uploaded_file($_FILES['file']['tmp_name'], $folder.$img);

$sql="INSERT INTO `tbl_adventure` (`pro_id`, `pro_name`, `img`, `size`, `price`, `point`,`type_product`, `des`) VALUES (NULL, '$name', '$img', '$size', '$price', '$point','$txtType', '$des')";
$retval=mysqli_query($con, $sql);
if(!$retval){
    die('could not add: '.mysqli_error($con));
}
else{
    include_once('select.php');
}
// include_once('index.php');
?>