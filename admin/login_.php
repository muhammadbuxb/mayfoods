<?php
require_once("db_connection.php");
$alertMessage = "";
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $loginEmail = $_POST["loginEmail"];
    $loginPassword = $_POST["loginPassword"];

    // Check if the user exists in the database
    $sql = "SELECT * FROM admin WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = $conn->query($sql);
    $alertMessage = "<div class='alert alert-danger' role='alert'>".mysqli_num_rows($result). "</div>";
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) == 1) {
        $_SESSION["admin_email"] = $loginEmail;
        header("Location: index.php"); 
        exit();
    } else {
        // echo "";
        $alertMessage = "<div class='alert alert-danger' role='alert'>Invalid email or password</div>";
    
    }
}

// Close connection
$conn->close();
?>