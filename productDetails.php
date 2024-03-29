<?php 
session_start();
include('header.php');
require_once("admin/db_connection.php");

if (isset($_POST['submit'])) {
    if (!isset($_SESSION["loginUser"])) {

        echo "<script>window.location.href = 'authentication.php';</script>";

    } else {


        $quantity = $_POST["quantity"];
        $kg = $_POST["kg"];

        $loggedInEmail = $_SESSION["loginUser"];

        // Query to fetch user data based on logged-in email
        $sql = "SELECT * FROM users WHERE email = '$loggedInEmail'";
        $result = $conn->query($sql);
        $userData = $result->fetch_assoc();
        $customerId = $userData['user_id'];

        // Check if product ID is provided
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];


            // Insert the product into the cart table
            $insertQuery = "INSERT INTO `cart` (`productId`, `quantity`, `weight`, `customerId`) VALUES ('$productId',$quantity,'$kg','$customerId' )";
            if (mysqli_query($conn, $insertQuery)) {
                echo "Product added to cart successfully.";
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }

        } else {
            echo "Product ID not provided.";
        }

        // Close database connection
        mysqli_close($conn);
    }

}
?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Product Details</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-dark active" aria-current="page">Product Detail</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<?php
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $query = "SELECT * FROM product where id = $productId";
    $result = mysqli_query($conn, $query);

    // Check if there are any products
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);


        ?>

        <!-- Shop Detail Start -->
        <div class="container-fluid py-5">
            <div class="row px-xl-5">
                <div class="col-lg-5 pb-5">
                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner border">
                            <div class="carousel-item active">
                                <img class="w-100 h-100" src="img/<?= $row['productImage'] ?>" alt="Image">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                            <i class="fa fa-2x fa-angle-left text-dark"></i>
                        </a>
                        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                            <i class="fa fa-2x fa-angle-right text-dark"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 pb-5">
                    <h3 class="font-weight-semi-bold">
                        <?= $row['productName'] ?>
                    </h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(5 Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">
                        $<?= $row['price'] ?>
                    </h3>
                    <p class="mb-4"><?= $row['description'] ?></p>

                    <div class="d-flex mb-4">

                        <form method="post">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" value="1kg" name="kg">
                                <label class="custom-control-label" for="color-1">1 kg</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" value="5kg" name="kg">
                                <label class="custom-control-label" for="color-2">5 kg</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" value="10kg" name="kg">
                                <label class="custom-control-label" for="color-3">10 kg</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-4" value="20kg" name="kg">
                                <label class="custom-control-label" for="color-4">20 kg</label>
                            </div>
                            <p></p>
                            <p></p>
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input name="quantity" id="quantityInput" type="text" class="form-control text-center"
                                    value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                    </div>
                    <div style="padding:30px">
                        <button name="submit" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </div>
                    </form>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">

                </div>

            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <!-- <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a> -->
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p>
                            <?= $row['description'] ?>
                        </p>

                    </div>
                    <!-- <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Additional Information</h4>
                        <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                    </li>
                                  </ul> 
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                    </li>
                                  </ul> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 review for "Colorful Stylish Shirt"</h4>
                                <div class="media mb-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        </div>
        <!-- Shop Detail End -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var quantityInput = document.getElementById("quantityInput");
                var btnPlus = document.querySelector('.btn-plus');
                var btnMinus = document.querySelector('.btn-minus');

                btnPlus.addEventListener('click', function (event) {
                    event.preventDefault(); // Prevent default form submission
                    var currentValue = parseInt(quantityInput.value);
                    quantityInput.value = currentValue + 1;
                });

                btnMinus.addEventListener('click', function (event) {
                    event.preventDefault(); // Prevent default form submission
                    var currentValue = parseInt(quantityInput.value);
                    if (currentValue > 1) {
                        quantityInput.value = currentValue - 1;
                    }
                });
            });
        </script>

        <?php
    }
}


include('footer.php') ?>