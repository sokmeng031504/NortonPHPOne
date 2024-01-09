<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link rel="icon" type="image/x-icon" href="assets/logo3.jpg" style="border-radius: 100%;"/>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
         <?php include './navBar.php'?>
        <div id="layoutSidenav">
            <?php include './layoutSide.php'?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <!-- <li class="breadcrumb-item"><a href="daskboard.php">Dashboard</a></li> -->
                            <li class="breadcrumb-item m-xl-auto">
                                <a href="add_product.php" class="btn btn-primary mb-2">+Add Product</a>
                            </li>
                            </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name Product</th>
                                            <th>Img</th>
                                            <th>Size</th>
                                            <th>Point date</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>Discount</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once 'config.php';
                                            $query = "SELECT * FROM tbl_adventure ORDER BY pro_id DESC";
                                            $result = mysqli_query($con, $query);
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['pro_id']; ?></td>
                                                        <td><?php echo $row['pro_name']; ?></td>
                                                        <td><img width="90px" height="90px" src="../images/<?php echo $row['img']; ?>"></td>
                                                        <td><?php echo $row['size']; ?></td>
                                                        <td><?php echo $row['point']; ?></td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td><?php echo $row['type_product']; ?></td>
                                                        <td><?php echo $row['discount']; ?></td>
                                                        <td><?php echo $row['des']; ?></td>
                                                        <td>
                                                            <a href="edit_product.php?proId=<?php echo $row['pro_id']; ?>" class="btn btn-primary">Edit</a>
                                                            <a href="#" class="btn btn-danger delete-button" data-proid="<?php echo $row['pro_id']; ?>">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php
}
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".delete-button").on("click", function (event) {
                    var productId = $(this).data("proid");
                    var confirmation = confirm("Are you sure you want to delete this item?");

                    if (confirmation) {
                        // If the user clicks "OK" on the confirmation dialog, delay redirection for a short time
                        setTimeout(function () {
                            window.location.href = "delete.php?pro_id=" + productId;
                        }, 100); // Adjust the delay time as needed
                    } else {
                        window.location =window.location.href;
                    }

                    // Prevent the default behavior of the anchor tag
                    event.preventDefault();
                });
            });
</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
