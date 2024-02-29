<?php 

require_once("admin/db_connection.php");

$alertMessage = "";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginEmail"]) && isset($_POST["loginPassword"])) {
    $loginEmail = $_POST["loginEmail"];
    $loginPassword = $_POST["loginPassword"];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User exists, create session and redirect to index.php
        session_start();
        $_SESSION["loginUser"] = $loginEmail;
        header("Location: index.php");
        echo "User : Login";
        exit;
    } else {
        // User does not exist or credentials are incorrect
        echo  "<div class='alert alert-danger' role='alert'>Invalid email or password</div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signupName"]) && isset($_POST["signupEmail"]) && isset($_POST["signupPassword"]) && isset($_POST["phone_number"]) && isset($_POST["address"])) {
    $signupName = $_POST["signupName"];
    $signupEmail = $_POST["signupEmail"];
    $signupPassword = $_POST["signupPassword"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];

    // Insert new user into the database
    $sql = "INSERT INTO users (name, email, password, phone, address) VALUES ('$signupName', '$signupEmail', '$signupPassword', '$phone_number', '$address')";
    if ($conn->query($sql) === TRUE) {
        // Account creation successful
        echo  "<div class='alert alert-success' role='alert'>Account Created successfully now Login</div>";
    } else {
        // Account creation failed
        echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    }
}
?>