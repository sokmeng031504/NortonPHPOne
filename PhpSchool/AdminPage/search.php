<?php
// Include your database connection configuration
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the search term from the form
    $productName = $_POST['productName'];

    // SQL query to search for products with a similar name
    $query = "SELECT * FROM tbl_adventure WHERE pro_name LIKE '%$productName%'";

    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        // Fetch and display the search results
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>' . $row['pro_name'] . '</p>';
            // Display other product information as needed
        }
    } else {
        echo 'Error executing the query: ' . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
