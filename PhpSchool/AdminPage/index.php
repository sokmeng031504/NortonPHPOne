<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <!-- <link rel="stylesheet" href="css/style.css"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/logo3.jpg" style="border-radius: 100%;"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <style>

            form {
            max-width: 200px;
            margin: auto;
            }

            /* Override Bootstrap styles to match the desired width */
            .form-outline {
                width: 100%;
            }

            .btn-primary {
                width: 100%;
            }

            .btn-link {
                width: auto; /* Or set a fixed width if needed */
            }
        </style>
</head>
<body>
<?php
require 'config.php';
session_start();
// When form submitted, check and create user session.
if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']); // removes backslashes
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // Check user is exist in the database
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['email'] = $email;
        // Redirect to user dashboard page
        header("Location: daskboard.php");
    } else {
        echo "<div class='form alert alert-danger'>
        <h3>Incorrect Email/password.</h3>
        <br/>
        <p class='lead'>Click here to <a href='loginForm.php' class='alert-link'>Login</a> again.</p>
    </div>
    ";
    }
} else {
    ?>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="loginForm.php">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p>Not a member? <a href="register.php">Register</a></p>
                    <p><a href="#">Forgot password?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
}
?>
</body>
</html>