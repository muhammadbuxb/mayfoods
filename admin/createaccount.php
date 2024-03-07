<?php
session_start();
include('header.php');
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
        
        <div class="col-lg-8 col-md-12">
            <div class="card text-white  bg-grey d-flex flex-column justify-content-center h-100 p-5">
                <div class="d-flex justify-content-center mb-4">
                    <div class="profile-icon">
                        <i class="fas fa-user text-primary"></i>
                    </div>
                </div>
                <h3 class="display-5 mb-3 text-primary">Create Admin Account</h3>
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