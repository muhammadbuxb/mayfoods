<?php
session_start();
include('header.php');
require_once("admin/db_connection.php");

$alertMessage = "";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['update'])){
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
            $alertMessage = "<div class='alert alert-success' role='alert'>Account Details Update successfully</div>";
        } else {
            echo "Error updating profile: " . $conn->error;
        }
       
    }}
?>


<div class="container py-6">
    <div class="section-header text-center mx-auto mb-5">
        <!-- <h1 class="display-5 mb-3">Account</h1> -->
    </div>
    <?php echo $alertMessage; ?>
    <div class="row g-5 justify-content-center">
       
    <?php
  
    // Fetch logged-in user's data
    $loggedInEmail = $_SESSION["loginUser"];
    $sql = "SELECT * FROM users WHERE email = '$loggedInEmail'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();

        // Display the edit profile form with current user details
        ?>
        <div class="col-lg-8 col-md-12">
            <div class="card text-white bg-grey d-flex flex-column justify-content-center h-100 p-5">
                <div class="d-flex justify-content-center mb-4">
                    <div class="profile-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <h3 class="display-5 mb-3 text-primary">Edit Profile</h3>
                <form method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="signupName" class="form-label text-dark">Name</label>
                            <input type="text" class="form-control" id="signupName" name="signupName" value="<?php echo $userData['name']; ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="signupEmail" class="form-label text-dark">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" name="signupEmail" value="<?php echo $userData['email']; ?>" required disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="phone_number" class="form-label text-dark">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $userData['phone']; ?>" required>
                        </div>
                        <div class="col-md-10">
                            <label for="address" class="form-label text-dark">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $userData['address']; ?>" required>
                        </div>
                        <div class="col-md-6">
                            <button name="update" type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
?>

    </div>
</div>

<?php include('footer.php'); ?>