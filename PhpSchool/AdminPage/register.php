<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add custom styles here if needed */
        body {
            background-color: #f8f9fa;
        }

        .card {
            max-width: 400px;
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #ccc;
            color: #fff;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        .card-footer {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<?php
require 'config.php';
// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");
    $query = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form alert alert-success'>
                    <h3>You are registered successfully.</h3>
                    <br/>
                    <p class='lead'>Click here to <a href='loginForm.php' class='alert-link'>Login</a></p>
                </div>
                ";
    } else {
        echo "<div class='form alert alert-danger'>
            <h3>Required fields are missing.</h3>
            <br/>
            <p class='lead'>Click here to <a href='register.php' class='alert-link'>register</a> again.</p>
        </div>
        ";
    }
} else {
    ?>
    <div class="card">
        <div class="card-header">
            <h4>Register</h4>
        </div>
        <div class="card-body">
            <form method="post" action="register.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Register</button>
            </form>
        </div>
        <div class="card-footer text-center">
            <p>Already have an account? <a href="./index.php">Login</a></p>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<?php
}
?>
</body>
</html>