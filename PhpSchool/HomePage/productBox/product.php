<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style-prefix.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <style>
      .category-item{
        background-color:  rgba(255, 255, 255, 0.69);
      }
      .showcase:hover{
        box-shadow: 0px 10px 15px -8px hsl(0, 90%, 70%);
        background-color:  rgba(255, 255, 255, 0.69);
      }

.popup {
  margin: 0 auto;
  width: 1100px;
  position: fixed;
  height: 100vh;
  background:hsl(0, 100%, 70%);
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: none;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  /* opacity: 0;
  visibility: hidden;
  pointer-events: none; */
  z-index: 10;
 
}

.popup-content {
    text-align: center;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 50px;
    cursor: pointer;
    color: hsl(0, 100%, 70%);
    background-color: azure;
}

    </style>
</head>
<body>
<div id="popupContainer" class="popup">
    <div class="popup-content">
        <span class="close" id="closePopupBtn">&times;</span>
        <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
        </div>
    </div>
    <div class="product-box" style="width: 500px;margin:0 auto;" id="new-product">

        <!--
          - PRODUCT MINIMAL
        -->
        <div class="category-item-container has-scrollbar">

            <div class="category-item">

              <div class="category-img-box">
                <img src="./images/backpack3.webp" alt="dress & frock" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">ADVENTURE </h3>

                  <p class="category-item-amount">(53)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="./images/backpack.6webp.jpg" alt="winter wear" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">The Backpack</h3>

                  <p class="category-item-amount">(58)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="./images/backpack2.webp" alt="glasses & lens" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">For Adventure</h3>

                  <p class="category-item-amount">(68)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="./images/backpack4.webp" alt="shorts & jeans" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Best Backpack</h3>

                  <p class="category-item-amount">(84)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="./assets/images/icons/tee.svg" alt="t-shirts" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">T-shirts</h3>

                  <p class="category-item-amount">(35)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="./assets/images/icons/jacket.svg" alt="jacket" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Jacket</h3>

                  <p class="category-item-amount">(16)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="./assets/images/icons/watch.svg" alt="watch" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Watch</h3>

                  <p class="category-item-amount">(27)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="./assets/images/icons/hat.svg" alt="hat & caps" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Hat & caps</h3>

                  <p class="category-item-amount">(39)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

          </div>

        <div class="product-minimal">

        <div class="product-showcase" id="top-Rated">
            <h2 class="title">Top Rated</h2>
                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./images/backpack.webp" alt="titan 100 ml womens perfume" class="showcase-img"
                      width="70" height="100px">
                  </a>

                  <div class="showcase-content">

                    <a href="#"  style="text-decoration: none;">
                      <h4 class="showcase-title">The Grade A Backpack For Adventure(Recomments)</h4>
                    </a>

                    <a href="#" class="showcase-category">Perfume</a>

                    <div class="price-box">
                      <p class="price">$82.00</p>
                      <del>$10.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./images/boil.jpg" alt="men's leather reversible belt" class="showcase-img"
                      width="70" height="100px">
                  </a>

                  <div class="showcase-content">

                    <a href="#"  style="text-decoration: none;">
                      <h4 class="showcase-title">The boil for adventure</h4>
                    </a>

                    <a href="#" class="showcase-category">Belt</a>

                    <div class="price-box">
                      <p class="price">$23.10</p>
                      <del>$1.90</del>
                    </div>

                  </div>

                </div>

              </div>

          <div class="product-showcase">
            <h2 class="title"></h2>
                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./images/item1.webp" alt="titan 100 ml womens perfume" class="showcase-img"
                      width="70" height="100px">
                  </a>

                  <div class="showcase-content">

                    <a href="#"  style="text-decoration: none;">
                      <h4 class="showcase-title">The Best boil</h4>
                    </a>

                    <a href="#" class="showcase-category">Perfume</a>

                    <div class="price-box">
                      <p class="price">$18.00</p>
                      <del>$1.00</del>
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
                      <h4 class="showcase-title">The Best ultraviolet</h4>
                    </a>

                    <a href="#" class="showcase-category">Belt</a>

                    <div class="price-box">
                      <p class="price">$75.92</p>
                      <del>$8.5</del>
                    </div>

                  </div>

                </div>

              </div>
          <div class="product-showcase">
            <h2 class="title">Hight</h2>
                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./images/hat1.jpg" alt="titan 100 ml womens perfume" class="showcase-img"
                      width="70" height="100px">
                  </a>

                  <div class="showcase-content">

                    <a href="#"  style="text-decoration: none;">
                      <h4 class="showcase-title">The Grade A Backpack For Adventure</h4>
                    </a>

                    <a href="#" class="showcase-category">Perfume</a>

                    <div class="price-box">
                      <p class="price">$42.00</p>
                      <del>$10.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./images/chai.png" alt="men's leather reversible belt" class="showcase-img"
                      width="70" height="100px">
                  </a>

                  <div class="showcase-content">

                    <a href="#"  style="text-decoration: none;">
                      <h4 class="showcase-title">The Grade A Backpack For Adventure</h4>
                    </a>

                    <a href="#" class="showcase-category">Belt</a>

                    <div class="price-box">
                      <p class="price">$24.00</p>
                      <del>$10.00</del>
                    </div>

                  </div>

                </div>

              </div>



        </div>



        <!--
          - PRODUCT FEATURED
        -->



        <!--
          - PRODUCT GRID
        -->

        <div class="product-main" id="new-product">

          <h2 class="title">New Products</h2>

          <div class="product-grid reveal">
                <?php
              $query = "SELECT * FROM tbl_adventure ORDER BY pro_id DESC";
              $result = mysqli_query($con, $query);
              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                      ?>
            <div class="showcase" >
              <div class="showcase-banner"   data-aos="fade-up" data-aos-offset="300">
              <div class="text-center">
                                <a class="btn  border mt-auto" href="item.php?proId=<?php echo $row['pro_id']; ?>">
                            </div>
              <img width="300px" height="250px" class="card-img-top product-img hover" src="../images/<?php echo $row['img']; ?>">
              <img width="300px"  height="250px" class="card-img-top" src="../images/<?php echo $row['img']; ?>">

                <p class="showcase-badge angle " style="background-color: hsl(0, 90%, 70%);"><?php echo $row['type_product'] ?></p>
              </a>
                <div class="showcase-actions">
                  <button class="btn-action">
                    <ion-icon name="heart-outline"></ion-icon>
                  </button>

                  <button class="btn-action">
                    <ion-icon name="eye-outline"></ion-icon>
                  </button>

                  <button class="btn-action">
                    <ion-icon name="repeat-outline"></ion-icon>
                  </button>

                  <button class="btn-action" id="openPopupBtn">
                    <ion-icon name="bag-add-outline"></ion-icon>
                  </button>


                </div>
              </div>

              <div class="showcase-content">
                <a href="#" class="showcase-category" style="text-decoration: none;"><?php echo $row['pro_name'] ?></a>

                <h3>
                  <a href="#" class="showcase-title" style="text-decoration: underline;"><?php echo $row['des'] ?></a>
                </h3>

                <div class="showcase-rating">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star-outline"></ion-icon>
                  <ion-icon name="star-outline"></ion-icon>
                </div>

                <div class="price-box">
                  <del><?php echo $row['discount'] ?>$</del>->
                  <p class="price"><?php echo $row['price'] ?>$</p>
                </div>

              </div>

            </div>

            <?php
}}?>

          </div>


        </div>


     <!-- HTML code -->
     <style>
        .newsletter-img img {
            margin: 0 auto;
            background-color: red;
            animation-name: stretch;
            animation-duration: 1.5s; 
            animation-timing-function: ease-out; 
            animation-delay: 0;
            animation-direction: alternate;
            animation-iteration-count: infinite;
            animation-fill-mode: none;
            animation-play-state: running;
          }
          
          @keyframes stretch {
            0% {
              transform: scale(.3);
              background-color: red;
              border-radius: 100%;
            }
            50% {
              background-color: orange;
            }
            100% {
              transform: scale(1.1);
              background-color: yellow;
            }
          }
         
    </style>
<div class="modal" data-modal>
    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content" >

        <button class="modal-close-btn" data-modal-close type="button">
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="newsletter-img" >
            <img src="./images/logo3.jpg" alt="subscribe newsletter" width="400" height="400">
        </div>

        <div class="newsletter">
            <form id="newsletterForm" action="#">
                <div class="newsletter-header">
                    <h3 class="newsletter-title">Subscribe Newsletter.</h3>
                    <p class="newsletter-desc">
                        Subscribe to get the latest products and discount updates.
                    </p>
                </div>
                <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <br>
                <button type="submit" class="btn-newsletter">Subscribe</button>
            </form>
        </div>
        
        <!-- Add the btn-close button -->
        <!-- <button class="btn-close" data-modal-close type="button">Close</button> -->
    </div>
</div>

<!-- JavaScript code -->
<script>

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



</body>
<script src="./assets/js/script.js"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
