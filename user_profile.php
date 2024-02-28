<?php include('header.php');
require_once("admin/db_connection.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<div class="container py-6">
    <div class="section-header text-center mx-auto mb-5">
        <h1 class="display-5 mb-3">Profile</h1>
    </div>
    <div class="row g-5 justify-content-center">
        <div class="col-lg-4 container-profile col-md-12">
            <div class=" text-white d-flex flex-column justify-content-center h-100 p-5">
                <div class="d-flex flex-row justify-content-center ">
                    <div class="profile-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="profile-info">
                    <h6>Name</h6>
                    <h4>John Doe</h4>
                </div>
                <div class="profile-info">
                    <h6>Email</h6>
                    <h4>johndoe@example.com</h4>
                </div>
                <div class="profile-info">
                    <h6>Phone</h6>
                    <p>(123) 456-7890</p>
                </div>
                <div class="profile-info">
                    <h6>Address</h6>
                    <p>123 Main Street, City, Country</p>
                </div>
                <button class="btn btn-edit">Edit Profile</button>
                <button class="btn btn-logout">Logout</button>

            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <h2>Order History</h2>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>