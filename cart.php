<?php
session_start();

include('header.php');
require_once("admin/db_connection.php");

// Check if the user is logged in
if (!isset($_SESSION["loginUser"])) {
    // Redirect to login page or show an error message
    header("Location: authentication.php");
    exit;
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
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr>
                        <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Beef_liver
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                    class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                        <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;">Beef_mince
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm  text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                    class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                        <td class="align-middle"><img src="img/product-3.jpg" alt="" style="width: 50px;"> Mutton_Leg
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                    class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                        <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> Mutton_Brain
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm  text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                    class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                        <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;">
                            Whole_Chicken_Skinless
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm  text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$150</td>
                        <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                    class="fa fa-times"></i></button></td>
                    </tr>
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
                            <h6 class="font-weight-medium"><?=$userData['name']?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phone</h6>
                            <h6 class="font-weight-medium"><?=$userData['phone']?></h6>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Address</h5>
                            <p class="font-weight-bold"><?=$userData['address']?></p>
                        </div>
                        <!-- <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button> -->
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
                        <h6 class="font-weight-medium">$150</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">$160</h5>
                    </div>
                    <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->


<?php include('footer.php') ?>