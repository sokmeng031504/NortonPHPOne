<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_adventure";

$con = new mysqli($host, $username, $password, $database);

// $con = mysqli_connect("localhost", "username", "password", "database_name");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
    // echo "Config Success!!!";
}
?>