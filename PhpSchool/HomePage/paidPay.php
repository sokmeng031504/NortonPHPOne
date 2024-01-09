<?php 
    include_once('../AdminPage/config.php');
    $folder = "../images/";
    // $pro_item = isset($_POST['txtmenu']) ? $_POST['txtmenu'] : '';
    // $img = isset($_FILES['file']['name']) ? $_FILES['file']['name'] : '';
    // $size = isset($_POST['txtsize']) ? $_POST['txtsize'] : '';
    // $price = isset($_POST['priceCart']) ? $_POST['priceCart'] : '';
    $qty = isset($_POST['inputQuantity']) ? $_POST['inputQuantity'] : '';
    $discount = isset($_POST['discount']) ? $_POST['discount'] : '';

// Example: Inserting data into tbl_cart
$sql = "INSERT INTO `tbl_cart`( `qty`, `discount`) 
        VALUES ('$qty', '$discount')";

    if ($con->query($sql) === TRUE) {
        echo "Record added successfully";
        // header("Location: http://localhost:8088/Norton/Co3E1/PhpSchool/HomePage/payment/payment.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>