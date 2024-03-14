<?php 
session_start();
include('header.php');
require_once("db_connection.php");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// if (!isset($_SESSION["admin_id"])) {
//   echo "<script>window.location.href = 'login.php';</script>";
//   exit;
// }
?>

<div class="container py-6">
    <div class="section-header text-center mx-auto mb-5">
        <h1 class="display-5 mb-3">Profile</h1>
    </div>
    <div class="row g-5 justify-content-center">
        <?php
        $user_id = $_GET['user_id'];
        // Query to fetch user data based on logged-in email
        $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();
            ?>
            <div class="col-lg-4 container-profile col-md-12">
                <div class="text-white d-flex flex-column justify-content-center h-100 p-5">
                    <div class="d-flex flex-row justify-content-center ">
                        <div class="profile-icon">
                            <i class="fas fa-user text-dark"></i>
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
                    <!-- <a class="btn btn-edit" href="edit_profile.php">Edit Profile</a>
                    <form method="post">
                        <button type="submit" name="logout" class="btn btn-logout">Logout</button>
                    </form> -->
                </div>
            </div>

            <?php
        } else {
            echo "User data not found.";
        } ?>
        <div class="col-lg-8 col-md-12">
            <h2>Order History</h2>
            <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="text-dark">
                        <tr>
                            <th class="align-middle">Order ID</th>
                            <th class="align-middle">Name</th>
                            <th class="align-middle">Phone</th>
                            <th class="align-middle">Address</th>
                            <th class="align-middle">Price</th>
                            <th class="align-middle">Status</th>
                            <th class="align-middle">View</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        $user_id = $_GET['user_id'];
                        $sql = "SELECT * FROM orders WHERE user_id = $user_id";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td class="align-middle">
                                        <?php echo $row['order_id']; ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php echo $row['name']; ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php echo $row['phone']; ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php echo $row['address']; ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php echo '$' . $row['price']; ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php echo $row['status']; ?>
                                    </td>
                                    <td class="align-middle">
                                        <a href="vieworder.php?order_id=<?php echo $row['order_id']; ?>"
                                            class="btn btn-sm btn-primary">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='7'>No orders found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>