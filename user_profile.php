<?php
// session_start();

include('header.php');
require_once("admin/db_connection.php");

// Check if the user is logged in
if (!isset($_SESSION["loginUser"])) {
    // Redirect to login page or show an error message
    // session_start();
    // header("Location: index.php");
    echo "<script>window.location.href = 'authentication.php';</script>";
    exit;
}

if (isset($_POST["logout"])) {
    // session_start();
    session_unset();
    session_destroy();

    // header("Location: index.php"); // Redirect to index.php after logout
    echo "<script>window.location.href = 'index.php';</script>";
        exit;
}
?>


<div class="container py-6">
    <div class="section-header text-center mx-auto mb-5">
        <h1 class="display-5 mb-3">Profile</h1>
    </div>
    <div class="row g-5 justify-content-center">
        <?php

        $loggedInEmail = $_SESSION["loginUser"];

        // Query to fetch user data based on logged-in email
        $sql = "SELECT * FROM users WHERE email = '$loggedInEmail'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();
            ?>
            <div class="col-lg-4 container-profile col-md-12">
                <div class="text-white d-flex flex-column justify-content-center h-100 p-5">
                    <div class="d-flex flex-row justify-content-center ">
                        <div class="profile-icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="profile-info">
                        <h6>Name</h6>
                        <h4>
                            <?php echo $userData['name']; ?>
                        </h4>
                    </div>
                    <div class="profile-info">
                        <h6>Email</h6>
                        <h4>
                            <?php echo $userData['email']; ?>
                        </h4>
                    </div>
                    <div class="profile-info">
                        <h6>Phone</h6>
                        <p>
                            <?php echo $userData['phone']; ?>
                        </p>
                    </div>
                    <div class="profile-info">
                        <h6>Address</h6>
                        <p>
                            <?php echo $userData['address']; ?>
                        </p>
                    </div>
                    <a class="btn btn-edit" href="edit_profile.php">Edit Profile</a>
                    <form method="post">
                        <button type="submit" name="logout" class="btn btn-logout">Logout</button>
                    </form>
                </div>
            </div>

            <?php
        } else {
            echo "User data not found.";
        } ?>
        <div class="col-lg-8 col-md-12">
            <h2>Order History</h2>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>