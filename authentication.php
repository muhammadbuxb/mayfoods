<?php
session_start();
include('header.php');
require_once("admin/db_connection.php");

$alertMessage = "";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST["login"])) {
    $loginEmail = $_POST["loginEmail"];
    $loginPassword = $_POST["loginPassword"];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User exists, create session and redirect to index.php
        // session_start();
        $_SESSION["loginUser"] = $loginEmail;
        echo "<script>window.location.href = 'user_profile.php';</script>";
        exit;
    } else {
        // User does not exist or credentials are incorrect
        $alertMessage = "<div class='alert alert-danger' role='alert'>Invalid email or password</div>";
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
        $alertMessage = "<div class='alert alert-success' role='alert'>Account Created successfully now Login</div>";
    } else {
        // Account creation failed
        $alertMessage = "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    }
}
?>

<div class="container py-6">
    <div class="section-header text-center mx-auto mb-5">
        <!-- <h1 class="display-5 mb-3">Account</h1> -->
    </div>
    <?php echo $alertMessage; ?>
    <div class="row g-5 justify-content-center">
        <div class="col-lg-4  col-md-12">
            <div class="card text-white bg-grey d-flex flex-column justify-content-center h-100 p-5">
                <div class="d-flex flex-row justify-content-center mb-4">
                    <div class="profile-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <h3 class="display-5 mb-3 text-primary">Login</h3>

                <form method="POST">
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
        <div class="col-lg-8 col-md-12">
            <div class="card text-white  bg-grey d-flex flex-column justify-content-center h-100 p-5">
                <div class="d-flex justify-content-center mb-4">
                    <div class="profile-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <h3 class="display-5 mb-3 text-primary">Create Account</h3>
                <form action="#" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="signupName" class="form-label text-dark">Name</label>
                            <input type="text" class="form-control" id="signupName" name="signupName" required>
                        </div>

                        <div class="col-md-6">
                            <label for="signupEmail" class="form-label text-dark">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" name="signupEmail" required>
                        </div>

                        <div class="col-md-6">
                            <label for="phone_number" class="form-label text-dark">phone_number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="col-md-6">
                            <label for="signupPassword" class="form-label text-dark">Password</label>
                            <input type="password" class="form-control" id="signupPassword" name="signupPassword"
                                required>
                        </div>
                        <div class="col-md-10">
                            <label for="address" class="form-label text-dark">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="col-md-6">

                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>