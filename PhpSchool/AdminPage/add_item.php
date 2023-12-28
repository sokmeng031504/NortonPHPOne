<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include('./navBar.php') ?>
        <div id="layoutSidenav">
            <?php include('./layoutSide.php') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add New Item</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Input
                            </div>
                            <div class="card-body">
                            
                                <form action="add_itemed.php" method="post" enctype="multipart/form-data">
                                    <table border="0" width="700" cellspacing=10>
                                        <!-- Inside the form -->
                                        <tr>
                                            <td>Menu Name</td>
                                            <td>
                                                <select name="txtmenu" id="txtmenu" class="form-control" required>
                                                    <option value="0">Select Menu...</option>
                                                    <?php
                                                    include_once('config.php');
                                                    $query = "SELECT * FROM tbl_adventure ORDER BY pro_id DESC";
                                                    $result = mysqli_query($con, $query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                            <option value="<?php echo $row['pro_id']; ?>"><?php echo $row['pro_name']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>

                                   
                                        <tr>
                                            <td>Picture</td>
                                            <td><input  class="form-control" type="file" name="file"></td>
                                        </tr>
                                        <tr>
                                            <td>Size</td>
                                            <td>
                                                <select  class="form-control" name="txtsize" id="" type="text" required>
                                                    <option>Choose size...</option>
                                                    <option>Small (36)</option>
                                                    <option>Medium (38-40)</option>
                                                    <option>Large (42)</option>
                                                    <option>Extra Large (44-46)</option>
                                                    <option>Double Extra Large (48)</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Price</td><br>
                                            <td><input  class="form-control" type="text" name="txtprice" required></td>
                                        </tr>
                                        <tr>
                                            <td>Point</td>
                                            <td><input  class="form-control" type="text" name="txtpoint" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan=2 class="text-end pe-10 pt-2 "><input type="submit" class="btn btn-primary m-lg-auto" name="btnadd" value="Add item"></td>
                                        </tr>
                                    </table>
                                </form>

                            </div>
                        </div> 
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright Sokmeng 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
