<?php
session_start();

include('header.php');
require_once("admin/db_connection.php");

// Check if the user is logged in
if (!isset($_SESSION["loginUser"])) {
    echo "<script>window.location.href = 'authentication.php';</script>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['minus_quantity'])) {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];
        $customerId = $_POST['customerId'];
        $quantity = max(1, $quantity - 1); // Decrease quantity by 1
        $updateQuery = "UPDATE cart SET quantity = $quantity WHERE productId = $productId AND customerId = $customerId ";
        $conn->query($updateQuery);
    } elseif (isset($_POST['plus_quantity'])) {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];
        $customerId = $_POST['customerId'];
        $quantity++; // Increase quantity by 1
        $updateQuery = "UPDATE cart SET quantity = $quantity WHERE productId = $productId AND customerId = $customerId ";
        $conn->query($updateQuery);
    } elseif (isset($_POST['remove_item'])) {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];
        $customerId = $_POST['customerId'];
        $quantity++; // Increase quantity by 1
        $updateQuery = "DELETE FROM cart WHERE productId = $productId AND customerId = $customerId ";
        $conn->query($updateQuery);
    }

    // Check if checkout button is clicked
    if (isset($_POST['checkout'])) {
        // Insert user details into orders table
        $loggedInEmail = $_SESSION["loginUser"];
        $getUserDataQuery = "SELECT * FROM users WHERE email = '$loggedInEmail'";
        $userDataResult = $conn->query($getUserDataQuery);
    
        if ($userDataResult->num_rows > 0) {
            $userData = $userDataResult->fetch_assoc();
            $userId = $userData['user_id'];
            $name = $userData['name'];
            $phone = $userData['phone'];
            $address = $userData['address'];
            $total = $_POST['total'];
            // Insert user details into orders table
            $insertOrderQuery = "INSERT INTO orders (user_id, name, phone, address, price, status) VALUES ('$userId', '$name', '$phone', '$address', '$total', 'Pending')";
            $conn->query($insertOrderQuery);
    
            // Get the orderId of the last added row
            $orderId = $conn->insert_id;
    
            // Insert cart items into order_items table
            $getCartItemsQuery = "SELECT cart.productId, cart.customerId ,cart.weight, cart.quantity, product.productName, product.price FROM cart INNER JOIN product ON cart.productId = product.id INNER JOIN users ON cart.customerId = users.user_id WHERE users.email = '$loggedInEmail';";
            $cartItemsResult = $conn->query($getCartItemsQuery);
    
            if ($cartItemsResult->num_rows > 0) {
                while ($cartItem = $cartItemsResult->fetch_assoc()) {
                    $productId = $cartItem['productId'];
                    $quantity = $cartItem['quantity'];
                    $price = $cartItem['price'];
                    $weight = $cartItem['weight'];
    
                    // Insert cart item into order_items table
                    $insertOrderItemQuery = "INSERT INTO order_items (order_id, product_id, quantity, price, weight) VALUES ($orderId,$productId,$quantity,$price, '$weight');";
                    $conn->query($insertOrderItemQuery);
                }
            }
    
            // Clear the cart after checkout
            $clearCartQuery = "DELETE FROM cart WHERE customerId = '$userId'";
            $conn->query($clearCartQuery);
        }
    }
}



?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Cart</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-dark active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-12 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="text-dark">
                    <tr>
                        <th class="align-middle">Products</th>
                        <th class="align-middle">Price</th>
                        <th class="align-middle">Quantity</th>
                        <th class="align-middle">Weight</th>
                        <th class="align-middle">Total</th>
                        <th class="align-middle">Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                    $loggedInEmail = $_SESSION["loginUser"];
                    $sql = "SELECT cart.productId, cart.customerId ,cart.weight, cart.quantity, product.productName, product.price FROM cart INNER JOIN product ON cart.productId = product.id INNER JOIN users ON cart.customerId = users.user_id WHERE users.email = '$loggedInEmail';";
                    $result = $conn->query($sql);
                    $subtotal = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td class="align-middle">
                                    <?php echo $row['productName']; ?>
                                </td>
                                <td class="align-middle">
                                    <?php echo '$' . $row['price']; ?>
                                </td>
                                <td class="align-middle">
                                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                        <input type="hidden" name="product_id" value="<?php echo $row['productId']; ?>">
                                        <input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
                                        <input type="hidden" name="customerId" value="<?php echo $row['customerId']; ?>">
                                        <div class="input-group quantity mr-3" style="width: 130px;">
                                            <div class="input-group-btn">
                                                <button type="submit" name="minus_quantity" class="btn btn-primary btn-minus">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input name="quantity_display" type="text" class="form-control text-center"
                                                value="<?php echo $row['quantity']; ?>" readonly>
                                            <div class="input-group-btn">
                                                <button type="submit" name="plus_quantity" class="btn btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="align-middle">
                                    <?= $row['weight'] ?>
                                </td>
                                <td class="align-middle">
                                    <?php echo '$' . ($row['quantity'] * $row['price']); ?>
                                </td>
                                <td class="align-middle">
                                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                        <input type="hidden" name="product_id" value="<?php echo $row['productId']; ?>">
                                        <input type="hidden" name="customerId" value="<?php echo $row['customerId']; ?>">
                                        <button type="submit" name="remove_item" class="btn btn-sm btn-primary"><i
                                                class="fa fa-times"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $subtotal += ($row['quantity'] * $row['price']);
                        }
                    } else {
                        echo "<tr><td colspan='5'>No items in cart.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <?php

            $loggedInEmail = $_SESSION["loginUser"];

            // Query to fetch user data based on logged-in email
            $sql = "SELECT * FROM users WHERE email = '$loggedInEmail'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $userData = $result->fetch_assoc();
                ?>
                <div class="card mb-5">
                    <div class="card-header border-0">
                        <h4 class="font-weight-semi-bold m-0">Delivery Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Name</h6>
                            <h6 class="font-weight-medium">
                                <?= $userData['name'] ?>
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phone</h6>
                            <h6 class="font-weight-medium">
                                <?= $userData['phone'] ?>
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Address</h5>
                            <p class="font-weight-bold">
                                <?= $userData['address'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "User data not found.";
            } ?>
        </div>
        <div class="col-lg-6">

            <div class="card mb-5">
                <div class="card-header border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">$
                            <?= $subtotal ?>
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <form method="post">
                    <div class="d-flex justify-content-between mt-2">
                    <input type="hidden" name="total" value="<?php echo $subtotal+10?>">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">$
                            <?= $subtotal + 10 ?>
                        </h5>
                    </div>

                        <button type="submit" name="checkout" class="btn btn-block btn-primary my-3 py-3">Proceed To
                            Checkout</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Remaining part of your code -->
    </div>
</div>


<?php include('footer.php') ?>