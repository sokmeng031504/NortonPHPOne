<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link rel="icon" type="image/x-icon" href="assets/logo3.jpg" style="border-radius: 100%;"/>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <?php
if (include_once('./config.php')) {
    // File included successfully
    $id = isset($_REQUEST['proId']) ? $_REQUEST['proId'] : '' ;
    $query = "SELECT tbl_item.*, tbl_adventure.pro_name  FROM tbl_item inner join  tbl_adventure on  tbl_item.pro_menu = tbl_adventure.pro_id WHERE tbl_item.pro_id = '$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if(isset($_POST['cancel'])) {
        header("Location: http://localhost:8088/Norton/Co3E1/PhpSchool/AdminPage/selectItem.php");
    } elseif(isset($_POST['update'])) {
        include_once('./update_item.php');
    } else {

    ?>
    </head>
    <body class="sb-nav-fixed">
    <?php include('./navBar.php') ?>
        <div id="layoutSidenav">
        <?php include('./layoutSide.php') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Item</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Item</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data">
                                    <table border="0" width="700" cellspacing=10>
                                        <tr>
                                            <td>Menu Name</td>
                                            <td>
                                                <select name="txtmenu" id="txtmenu" class="form-control">
                                                    <option value="<?php echo $row['pro_id']; ?>"><?php echo $row['pro_name']; ?></option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Picture</td>
                                            <td><input class="form-control" type="file" name="file" value="<?php echo $row['img']; ?>">
                                            <img src="../images/<?php echo $row['img']; ?>" alt="Current Image" height="50"></td>
                                        </tr>
                                        <tr>
                                            <td>Size</td>
                                            <td>
                                                <select class="form-control" name="txtsize" id="" type="text" >
                                                    <option value="<?php echo $row['size']; ?>"><?php echo $row['size']; ?></option>
                                                    <option>Small (36)</option>
                                                    <option>Medium (38-40)</option>
                                                    <option>Large (42)</option>
                                                    <option>Extra Large (44-46)</option>
                                                    <option>Double Extra Large (48)</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Point</td>
                                            <td><input class="form-control" type="text" name="txtpoint" value="<?php echo $row['point']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Price</td><br>
                                            <td><input class="form-control" type="text" name="txtprice" value="<?php echo $row['price']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-end pe-10 pt-2"> <!-- Use Bootstrap class text-end to align content to the right -->
                                                <input type="submit" class="btn btn-primary" name="cancel" value="Cancel">
                                                <input type="submit" class="btn btn-primary" name="update" value="Update">
                                            </td>
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
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
    <?php


    }

}
    ?>
</html>
