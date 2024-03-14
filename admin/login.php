<?php
session_start();
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>May Foods</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
      

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            
            <img class="navbar-brand" src="../img/mayFoodsLogo.png" style="height: 70px; width:60px">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-secondary  m-0">Dashboard</h1>
            </a>
           
        </nav>
    </div>
    <!-- Navbar End -->


<div class="container py-6">
    <div class="section-header text-center mx-auto mb-5">
        <!-- <h1 class="display-5 mb-3">Account</h1> -->
    </div>
    <?php echo $alertMessage; ?>
    <div class="row g-5 justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card text-white bg-grey d-flex flex-column justify-content-center h-100 p-5">
                <div class="d-flex flex-row justify-content-center mb-4">
                    <div class="profile-icon">
                        <i class="fas fa-user text-primary"></i>
                    </div>
                </div>
                <h3 class="display-5 mb-3 text-primary">Admin Login</h3>

                <form aaction="login_.php" method="POST">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label text-dark">Email address</label>
                        <input type="email" class="form-control text-dark" id="loginEmail" name="loginEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label text-dark">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                    </div>
                    <button name="login" type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>

        <?php include('footer.php');
?>