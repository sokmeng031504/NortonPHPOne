<?php
    include_once('../AdminPage/config.php');
    $id = isset($_REQUEST['proId']) ? $_REQUEST['proId'] : '' ;

    // Check for database connection errors
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM tbl_adventure WHERE pro_id = '$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
     
    </head>
    <body>
        <!-- Navigation-->
        <?php include('./header.php') ?>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="../images/<?php echo $row['img']; ?>" alt="..." /></div>
                    <div class="col-md-6" style="text-align:center">
                        <div class="small mb-1">CODE: <?php echo $row['pro_id']; ?></div>
                        <h1 class="display-5 fw-bolder"><?php echo $row['pro_name']; ?></h1>
                        <div class="fs-5 mb-5">
                            <!-- <span class="text-decoration-line-through">$45.00</span> -->
                            <h3><span>Price: <?php echo $row['price']; ?> $</span></h3>
                            <span>Size: <?php echo $row['size']; ?> </span>
                        </div>
                        <p class="lead"><?php echo $row['des']; ?></p>
                        <div class="d-flex" style="text-align:center;margin-left:100px">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" id="at-to-cart">
                                <i class="bi-cart-fill me-1" id="at-to-cart"></i>
                                Add to cart
                            </button>
                            <button class="btn btn-outline-dark flex-shrink-1" type="button" id="cancel-to-cart">
                            <i class="bi bi-arrow-left-circle-fill"></i>
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related items section-->
        <?php
            include_once('relateItem.php');
        ?>
        <!-- Footer-->
        <footer class="py-5">
        <?php include('./footer/footer.php') ?>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function(){
        $("#at-to-cart").click(function () {
            var currentValue = parseInt($("#number-add-cart").text());

            // Increment the value by 1
            var newValue = currentValue + 1;

            // Update the badge with the new value
            $("#number-add-cart").text(newValue); 
        });

        
        $("#cancel-to-cart").click(function () {
            var currentValue = parseInt($("#number-add-cart").text());

            // Increment the value by 1
            var newValue = currentValue - 1;
            if(newValue >=0){

                $("#number-add-cart").text(newValue); 
                // Update the badge with the new value
            }
            else{
                return false;
            }
        });
    });
</script>

    </body>
</html>
