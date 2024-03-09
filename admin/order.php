<?php include('header.php'); 

require_once("db_connection.php");

?>


<div class="container-fluid pt-5" style="margin-top:20vh">
    <div class="row px-xl-5">
        <div class="col-lg-12 table-responsive mb-5">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
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
                                        <a href=""
                                            class="btn btn-sm btn-secondary">
                                            <?php echo $row['status']; ?> 
                                        </a>
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
<!-- orders End -->

<?php include('footer.php') ?>