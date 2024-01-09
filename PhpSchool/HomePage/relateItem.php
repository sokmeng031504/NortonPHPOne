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
        <link href="css/aos.css?ver=1.1.0" rel="stylesheet">

    </head>
    <body>

        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" data-aos="fade-up" data-aos-offset="150">
                <?php
                    include_once('../AdminPage/config.php');
                    $id = isset($_REQUEST['proId']) ? $_REQUEST['proId'] : '';

                    // Check for database connection errors
                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $query = "SELECT tbl_adventure.*, tbl_item.*
                            FROM tbl_adventure
                            JOIN tbl_item ON tbl_adventure.pro_id = tbl_item.pro_menu
                            WHERE tbl_adventure.pro_id = '$id'";
                    $result = mysqli_query($con, $query);

                    // Check if the query was successful
                    if ($result) {
                        // Use a while loop to iterate through the rows
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../images/<?php echo $row['img']; ?>" alt="..." height="280px"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="color:black"><?php echo $row['pro_name'] ?></h5>
                                    <!-- Product price-->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="100px">Size</th>
                                                <th>Price</th>
                                                <th>Point</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td><?php echo $row['size'];?></td>
                                                    <td><?php echo $row['price']; ?> $</td>
                                                    <td><?php echo $row['point']; ?></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    } else {
                        echo "Query failed: " . mysqli_error($con);
                    }

                    // Close the database connection
                    mysqli_close($con);
                    ?>

                    
                </div>
            </div>
        </section>
    </body>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
            <script src="js/core/popper.min.js?ver=1.1.0"></script>
            <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
            <script src="js/now-ui-kit.js?ver=1.1.0"></script>
            <script src="js/aos.js?ver=1.1.0"></script>
            <script src="js/main.js?ver=1.1.0"></script>
    </html>