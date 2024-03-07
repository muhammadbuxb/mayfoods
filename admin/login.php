<?php include('header.php');
require_once("db_connection.php");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<div class="container py-6">
    <div class="section-header text-center mx-auto mb-5">
        <!-- <h1 class="display-5 mb-3">Account</h1> -->
    </div>
    <!-- <?php echo $alertMessage; ?> -->
    <div class="row g-5 justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card text-white bg-grey d-flex flex-column justify-content-center h-100 p-5">
                <div class="d-flex flex-row justify-content-center mb-4">
                    <div class="profile-icon">
                        <i class="fas fa-user text-primary"></i>
                    </div>
                </div>
                <h3 class="display-5 mb-3 text-primary">Admin Login</h3>

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

        <?php include('footer.php');
?>