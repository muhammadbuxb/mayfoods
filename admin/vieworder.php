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
        <h1 class="display-5 mb-3">Order Details</h1>
    </div>
    <div class="row g-5 justify-content-center">
       
        <div class="col-lg-12 col-md-12">
            
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
                            
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
$orderId = $_GET['order_id'];
                        // $loggedInEmail = $_SESSION["loginUser"];
                        $sql = "SELECT * FROM orders WHERE order_id = $orderId ";
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
        <div class="col-lg-12 col-md-12">
    <h2>Order Items</h2>
    <div class="col-lg-12 table-responsive mb-5">
        <table class="table table-bordered text-center mb-0">
            <thead class="text-dark">
                <tr>
                    <th class="align-middle">##</th>
                    <th class="align-middle">Product Name</th>
                    <th class="align-middle">Quantity</th>
                    <th class="align-middle">Weight</th>
                    <th class="align-middle">Price</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                // Get order ID
                // $loggedInEmail = $_SESSION["loginUser"];
                $orderId = $_GET['order_id'];
                $sql = "SELECT * FROM orders WHERE order_id = $orderId";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $orderId = $row['order_id'];

                    // Fetch order items from order_items table
                    $orderItemsQuery = "SELECT order_items.*, product.productName FROM order_items INNER JOIN product ON order_items.product_id = product.id WHERE order_items.order_id = $orderId";
                    $orderItemsResult = $conn->query($orderItemsQuery);
                    if ($orderItemsResult->num_rows > 0) {
                        $counter = 1;
                        while ($orderItem = $orderItemsResult->fetch_assoc()) {
                            ?>
                            <tr>
                                <td class="align-middle"><?php echo $counter++; ?></td>
                                <td class="align-middle"><?php echo $orderItem['productName']; ?></td>
                                <td class="align-middle"><?php echo $orderItem['quantity']; ?></td>
                                <td class="align-middle"><?php echo $orderItem['weight']; ?></td>
                                <td class="align-middle"><?php echo '$' . $orderItem['price']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='5'>No order items found.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No orders found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


    </div>
</div>

<?php include('footer.php'); ?>