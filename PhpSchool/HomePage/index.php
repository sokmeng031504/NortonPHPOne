<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adventure Shop</title>
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link rel="icon" type="image/x-icon" href="assets/logo3.jpg" style="border-radius: 100%;"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
        <!-- <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
        <link href="css/main.css?ver=1.1.0" rel="stylesheet"> -->



        <?php
if (include_once ('../AdminPage/config.php')) {
    // File included successfully
} else {
    // Handle the error or display a message
    die("Failed to include 'added_product.php'");
}
?>
        <style>
            body {
    font-family: Arial, sans-serif;
}

            .popup {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #f1f1f1;
                padding: 20px;
                border: 1px solid #ccc;
                z-index: 1;
            }

            .popup-content {
                text-align: center;
            }

            .close {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 20px;
                cursor: pointer;
            }

            .box{
                transition: 1s ease;
            }
            .box:hover{
                -webkit-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
                transition: 1s ease;
            }
            .list-unstyled img {
                transform: scale(1.20);
                opacity: 1;
                transition: opacity 0.4s, transform 0.4s;
            }

            .list-unstyled img:hover {
                transform: scale(1.02);
                opacity: 0.7;
                border: 1px solid  hsl(158, 36%, 37%);
            }
            body{
                background-color: white;
            }
        </style>
    </head>
    <body style="display:block" class="bg-light">
        <a id="button"></a>
        <!-- Navigation-->
        <div style="margin-top: -20px;">
            <?php include './header.php';?>
        </div>
        <!-- Header-->
        <!-- Video -->
        <video
            src="./videos/Adventure Product Reviews.mp4"
            autoplay loop playsinline muted style="object-fit: cover;
            width: 100vw;
            height: 450px;margin-right:50px">
        </video>
        <!-- Section-->
        <!-- Product -->
        <div style="margin-top:-110px">
            <?php include './productBox/product.php'?>
        </div>
       
        <div height="200px" data-aos="fade-up" data-aos-offset="400">
          <?php include './previewPro/index.php';?>
        <div>
        <!-- Card Slide -->
        <br>
        <div data-aos="fade-up" data-aos-offset="20">
            <?php include './cardSlide/cardSlide.php'?>
        </div>
        <!-- Contact-->
        <div style="border:#ccc 1px solid;padding:10px;margin:0 auto;border-radius: 50px;">
            <br>
            <?php include './contact/index.php'?>
        </div>
        <!-- Product -->
        <div style="width: 1100px;margin:0 auto" data-aos="fade-up" data-aos-offset="20">
            <div class="product-minimal"  >

                <div class="product-showcase" id="top-Rated" >
                    <h2 class="title"></h2>
                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="./images/2b2956a90bf7ccd54d858a70073be9a0553336b1_750x.webp" alt="titan 100 ml womens perfume" class="showcase-img"
                            width="70" height="100px">
                        </a>

                        <div class="showcase-content">

                            <a href="#"  style="text-decoration: none;">
                            <h4 class="showcase-title">The Grade A Backpack For Adventure(Recomments)</h4>
                            </a>

                            <a href="#" class="showcase-category">Perfume</a>

                            <div class="price-box">
                            <p class="price">$82.00</p>
                            <del>$100.00</del>
                            </div>

                        </div>

                        </div>

                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="./images/backpack3.webp" alt="men's leather reversible belt" class="showcase-img"
                            width="70" height="100px">
                        </a>

                        <div class="showcase-content">

                            <a href="#"  style="text-decoration: none;">
                            <h4 class="showcase-title">Backpack for adventure</h4>
                            </a>

                            <a href="#" class="showcase-category">Good Quality</a>

                            <div class="price-box">
                            <p class="price">$63.10</p>
                            <del>$80.90</del>
                            </div>

                        </div>

                        </div>

                    </div>

                <div class="product-showcase">
                    <h2 class="title"></h2>
                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="./images/Coleman_tent.png" alt="titan 100 ml womens perfume" class="showcase-img"
                            width="70" height="100px">
                        </a>

                        <div class="showcase-content">

                            <a href="#"  style="text-decoration: none;">
                            <h4 class="showcase-title">The Best Ultraviolet</h4>
                            </a>

                            <a href="#" class="showcase-category">Popular Products</a>

                            <div class="price-box">
                            <p class="price">$98.00</p>
                            <del>$100.89</del>
                            </div>

                        </div>

                        </div>

                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="./images/ultraviolet3.jpg" alt="men's leather reversible belt" class="showcase-img"
                            width="70" height="100px">
                        </a>

                        <div class="showcase-content">

                            <a href="#"  style="text-decoration: none;">
                            <h4 class="showcase-title">The Best Ultraviolet</h4>
                            </a>

                            <a href="#" class="showcase-category">Popular Products</a>

                            <div class="price-box">
                            <p class="price">$75.92</p>
                            <del>$90.5</del>
                            </div>

                        </div>

                        </div>

                    </div>
                <div class="product-showcase">
                    <h2 class="title"></h2>
                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="./images/sleeping cosmic.jpg" alt="titan 100 ml womens perfume" class="showcase-img"
                            width="70" height="100px">
                        </a>

                        <div class="showcase-content">

                            <a href="#"  style="text-decoration: none;">
                            <h4 class="showcase-title">leeping cosmic</h4>
                            </a>

                            <a href="#" class="showcase-category">Good Quality</a>

                            <div class="price-box">
                            <p class="price">$32.00</p>
                            <del>$50.00</del>
                            </div>

                        </div>

                        </div>

                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="./images/sleeping cosmic2.jpg" alt="men's leather reversible belt" class="showcase-img"
                            width="70" height="100px">
                        </a>

                        <div class="showcase-content">

                            <a href="#"  style="text-decoration: none;">
                            <h4 class="showcase-title">Sleeping cosmic</h4>
                            </a>

                            <a href="#" class="showcase-category">Best Product</a>

                            <div class="price-box">
                            <p class="price">$24.00</p>
                            <del>$30.00</del>
                            </div>

                        </div>

                        </div>

                    </div>



            </div>

        </div>
        <!-- Feed back -->
        <br>

        <div style="margin:0 auto;width:1100px">
            <h3>Feed Back</h3>
            <?php include './feedBack/feedBack.php'?>
        </div>
        
        <!-- Footer -->
         <br>
            <?php include './footer/footer.php'?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                var btn = $('#button');

                $(window).scroll(function() {
                    if ($(window).scrollTop() > 300) {
                        btn.addClass('show');
                    } else {
                        btn.removeClass('show');
                    }
                });

                btn.on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({ scrollTop: 0 }, '800'); // Adjust the duration as needed
                });
            });

            document.addEventListener('DOMContentLoaded', function () {
                const openPopupBtn = document.getElementById('openPopupBtn');
                const closePopupBtn = document.getElementById('closePopupBtn');
                const popupContainer = document.getElementById('popupContainer');

                openPopupBtn.addEventListener('click', function () {
                    popupContainer.style.display = 'block';
                });

                closePopupBtn.addEventListener('click', function () {
                    popupContainer.style.display = 'none';
                });
            });

        </script>

        <!-- Core theme JS-->

    </body>
            <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
            <script src="js/core/popper.min.js?ver=1.1.0"></script>
            <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
            <script src="js/now-ui-kit.js?ver=1.1.0"></script>
            <script src="js/aos.js?ver=1.1.0"></script>
            <script src="js/main.js?ver=1.1.0"></script>
</html>
