<?php
// Include your database connection file
require_once("admin/db_connection.php");
session_start();
if (!isset($_SESSION["loginUser"])) {
  
    echo "<script>window.location.href = 'authentication.php';</script>";
   
} else {

    $loggedInEmail = $_SESSION["loginUser"];

    // Query to fetch user data based on logged-in email
    $sql = "SELECT * FROM users WHERE email = '$loggedInEmail'";
    $result = $conn->query($sql);
    $userData = $result->fetch_assoc();
    $customerId = $userData['user_id'];
    
    

    // Check if product ID is provided
    if (isset($_GET['id'])) {
        $productId = $_GET['id'];

       
            // Insert the product into the cart table
            $insertQuery = "INSERT INTO `cart` (`productId`, `quantity`, `weight`, `customerId`) VALUES ('$productId',1,'1kg','$customerId' )";
            if (mysqli_query($conn, $insertQuery)) {
                echo "Product added to cart successfully.";
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        
    } else {
        echo "Product ID not provided.";
    }

    // Close database connection
    mysqli_close($conn);
}
?>