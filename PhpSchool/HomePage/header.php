<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adventure Shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
        .navbar-nav .nav-item:hover .nav-link {
            color: #007bff; /* Change the color to your preferred hover color */
        }
        #img{
            border-radius: 100%;
            border: 3px solid hsl(158, 36%, 37%);
            height: 50px;
        }
        .dropdown:hover>.dropdown-menu {
            position: absolute;
            display: block;
            }

            .dropdown>.dropdown-toggle:active {
            /*Without this, clicking will make it sticky*/
                pointer-events: none;
            }
        </style>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-9">
                <a class="navbar-brand" href="./index.php" style="color:crimson"><img src="./images/logo3.jpg" alt="" width="50px" id="img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#new-product">New Product</a></li>
                                <li><a class="dropdown-item" href="#feedback">All Feedback</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="./payment/payment.php" class="btn btn-outline-dark">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill" id="number-add-cart">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
</body>
</html>