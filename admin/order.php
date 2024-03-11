<?php include('header.php');

require_once("db_connection.php");

if(isset($_POST["statusBtn"])){
    $orderId = $_POST['orderId'];
    $updateQuery = "UPDATE `orders` SET `status` = 'Delivered' WHERE `orders`.`order_id` = $orderId  ";
    $updateResult = $conn->query($updateQuery);
}

?>


<div class="container-fluid pt-5" style="margin-top:20vh">
    <div class="row px-xl-5">
        <div class="col-lg-12 table-responsive mb-5">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Orders</h1>
                <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
            </div>
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
                        $sql = "SELECT * FROM orders";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Set status class and href based on status value
                        
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
                                        <?php
                                        if ($row['status'] === 'Pending') {
                                            ?>
                                            <form method="post" action="">
                                                <input type="hidden" name="orderId" value="<?=$row['order_id']?>">
                                                <button type="submit" name="statusBtn"
                                                    class="btn btn-block btn-secondary my-2 py-2">
                                                    <?= $row['status'] ?>
                                                </button>
                                            </form>

                                            <?php
                                        } else {
                                            ?>
                                            <button class="btn btn-block btn-primary my-2 py-2">
                                                <?= $row['status'] ?>
                                            </button>
                                            <?php
                                        }

                                        ?>
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

            <script>
                function updateStatus(orderId) {
                    // Assuming you're using AJAX to update the status
                    // You can make an AJAX call to update the status in the database
                    // Example:
                    $.ajax({
                        url: 'update_status.php',
                        method: 'POST',
                        data: { orderId: orderId },
                        success: function (response) {
                            // Handle success
                            console.log('Status updated successfully.');
                        },
                        error: function (xhr, status, error) {
                            // Handle error
                            console.error('Error updating status:', error);
                        }
                    });
                    console.log('Update status for order ID:', orderId);
                }
            </script>

        </div>

    </div>
</div>
<!-- orders End -->

<?php include('footer.php') ?>