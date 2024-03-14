<?php
    session_start(); // Start session if not already started

    // Include database connection file
    require_once("admin/db_connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Fetch data from the form
        $name = $_POST['signupName'];
        $phone = $_POST['phone_number'];
        $address = $_POST['address'];

        // Fetch logged-in user's email
        $loggedInEmail = $_SESSION["loginUser"];

        // Update user's profile in the database
        $sql = "UPDATE users SET name='$name', phone='$phone', address='$address' WHERE email='$loggedInEmail'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Profile updated successfully";
        } else {
            echo "Error updating profile: " . $conn->error;
        }
        
        // Redirect back to the profile page
        // header("Location: profile.php");
        exit();
    }
?>
