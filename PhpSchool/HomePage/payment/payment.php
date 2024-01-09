<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Adventure Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../about.php">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <a href="./payment/payment.php" class="btn btn-outline-dark">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </a>
                    </form> -->
                </div>
            </div>
        </nav>

 <?php
 include_once('../../AdminPage/config.php');
 $id = isset($_REQUEST['proId']) ? $_REQUEST['proId'] : '' ;
 $query = "SELECT tbl_adventure.*, tbl_cart.*
 FROM tbl_adventure
 LEFT JOIN tbl_cart ON tbl_adventure.pro_id = tbl_cart.pro_item
 WHERE tbl_adventure.pro_id = '$id'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $total_price = 0;
        ?>
            <table class="table" style="width: 900px;margin:0 auto">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Quatity</th>
                <!-- <th scope="col">Discount(%)</th> -->
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <form id="cartForm">
                    <th scope="row" width="50px">1</th>
                        <td width="100px"> <img class="card-img-top" src="../images/<?php echo $row['img']; ?>" alt="..." width="100%" height="100%"/></td>
                        <td width="200px"><input  class="form-control" type="text" value=" <?php echo $row['price'] ?> $" id="priceCart" name="priceCart"></td>
                        <td  width="200px">
                            <input type="Qty" class="form-control"  placeholder="Quantity" id="qty" value="1" name="qty">
                        </td>
                        <!-- <td  width="100px">
                            <input type="discount" class="form-control" hidden  placeholder="(%)" id="discount" value="" name="discount">
                        </td> -->
                        <td width="200px"> <strong  id="total"> <?php echo $total_price; ?></strong>$</td>
                   
                    <!-- <td colspan="5" align="right">
                        <button id="confirm" class="btn btn-success">Confirm</button>
                    </td> -->
                </form>
                </tr>
            </tbody>
            </table>
        <?php
    }}
        ?>

<br>



<div class="mapouter">
    <div class="gmap_canvas">
        <div id="searchContainer" class="float-left">
            <input type="text" id="addressInput" placeholder="Enter address">
            <button id="searchBtn" class="btn btn-success">Search</button>
            <div class="confirm-location">
                <button id="confirm-location" class="btn btn-success">Confirm Location</button>
            </div>
        </div>
        <iframe id="googleMap" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no"></iframe>
    </div>
</div>

<script src="script.js"></script>
<div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Lightroom Presets</p>
                    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>33.00+</p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/backpack5.webp"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/backpack.webp"
                                class="d-block w-100 h-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/backpack1.png"
                                class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon">
                            <span class="fas fa-arrow-left"></span>
                        </div>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon">
                            <span class="fas fa-arrow-right"></span>
                        </div>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="dis info my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quos ipsa
                    sed officiis odio
                </p>
                <div class="radiobtn">
                    <input type="radio" name="box" id="one">
                    <input type="radio" name="box" id="two">
                    <input type="radio" name="box" id="three">
                    <label for="one" class="box py-2 first">
                        <div class="d-flex align-items-start">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Collection 01
                                    </span>
                                    <span class="fas fa-dollar-sign">29</span>
                                </div>
                                <span>10 x Presets. Released in 2018</span>
                            </div>
                        </div>
                    </label>
                    <label for="two" class="box py-2 second">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Collection 01
                                    </span>
                                    <span class="fas fa-dollar-sign">29</span>
                                </div>
                                <span>10 x Presets. Released in 2018</span>
                            </div>
                        </div>
                    </label>
                    <label for="three" class="box py-2 third">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Collection 01
                                    </span>
                                    <span class="fas fa-dollar-sign">29</span>
                                </div>
                                <span>10 x Presets. Released in 2018</span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Payment Details</p>
                    <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                </div>
                <form action="">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Email address</p>
                        <input class="form-control" type="email" value="" id="address">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">Card details</p>
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-cc-visa ps-3"></div>
                            <input type="text" class="form-control" placeholder="Card Details" required>
                            <div class="d-flex w-50">
                                <input type="text" class="form-control px-0" placeholder="MM/YY" required>
                                <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV" required>
                            </div>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Cardholder name</p>
                            <input class="form-control" type="text" required>
                        </div>
                        <div class="address">
                            <p class="dis fw-bold mb-3">Billing address</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>United States</option>
                                <option value="1">India</option>
                                <option value="2">Australia</option>
                                <option value="3">Canada</option>
                            </select>
                            <div class="d-flex">
                                <input class="form-control zip" type="text" placeholder="ZIP">
                                <input class="form-control state" type="text" placeholder="State">
                            </div>
                            <div class=" my-3">
                                <p class="dis fw-bold mb-2">VAT Number</p>
                                <div class="inputWithcheck">
                                    <input class="form-control" type="text" value="GB012345B9">
                                    <span class="fas fa-check"></span>

                                </div>
                            </div>
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Subtotal</p>
                                    <p><span class="fas fa-dollar-sign"></span>33.00</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>VAT<span>(20%)</span></p>
                                    <p><span class="fas fa-dollar-sign"></span>2.80</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold"><span class="fas fa-dollar-sign"></span>35.80</p>
                                </div>
                                <a href="../index.php">
                                <div class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>35.80
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const searchBtn = document.getElementById('searchBtn');
    const addressInput = document.getElementById('addressInput');
    const googleMap = document.getElementById('googleMap');

    searchBtn.addEventListener('click', function () {
        const address = encodeURIComponent(addressInput.value);
        const mapSrc = `https://maps.google.com/maps?q=${address}&t=&z=13&ie=UTF8&iwloc=&output=embed`;
        googleMap.src = mapSrc;


    });

    $(document).ready(function(){
        $("#confirm-location").click(function(){
        var add = $("#addressInput").val();
        alert(add);
            if(add != ""){
                $("#address").text(add);
                $("#address").val(add);
            }
        });

        $("#number-add-cart").click(function(){
            var card = $("#number-add-cart").val();
            alert(card)
        })
    });


});


        $("#qty, #priceCart").change(function(){
            // Get the selected quantity and price
            var discount = $("#discount").val();
            var selectedQuantity = $("#qty").val();
            var price = $("#priceCart").val();  
            price = price.substr(0, price.length-1); 
            var formData = $("#cartForm").serialize();

            // alert(price);
            // Calculate the total
            var total = selectedQuantity * price;
            // Update the total input field
            $("#total").val(total);
            $("#total").text(total);
            // alert(total)

            // $.ajax({
            //         type: "POST",
            //         url: "paidPay.php", // Change this to your server-side script
            //         data: formData,
            //         success: function(response){
            //             alert(response); // Show the server response
            //         },
            //         error: function(xhr, status, error){
            //             console.error(xhr.responseText); // Log any errors
            //         }
            //     });
        })


            // Initialize total on page load
        $(document).ready(function() {
            updateTotal();
        });
    </script>
</body>
</html>
