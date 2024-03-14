<?php
session_start();
include('header.php');
require_once("admin/db_connection.php");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container">
    <h1 class="display-3 mb-3 animated slideInDown">Products</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-body" href="index.php">Home</a>
        </li>
        <!-- <li class="breadcrumb-item">
            <a class="text-body" href="#">Pages</a>
          </li> -->
        <li class="breadcrumb-item text-dark active" aria-current="page">
          Products
        </li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Product Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-0 gx-5 align-items-end">
      <div class="col-lg-4">
        <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
          <h1 class="display-5 mb-3">Our Products</h1>
          <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
        </div>
      </div>

      <div class="col-lg-8 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">All</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Beef</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-6">Chicken</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-7">Mutton</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">SeaFood</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-4">Rice</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-5">Chilli</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="tab-content">
      <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product ORDER BY id DESC";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?= ($row['price']) + ($row['price'] * 0.25); ?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-eye text-primary me-2"></i>View
                        detail</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href="addToCart.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-shopping-bag text-primary me-2"></i>Add
                        to cart</a>
                    </small>
                  </div>
                </div>
              </div>
            <?php }
          } else {
            echo "No products found.";
          } ?>

        </div>
      </div>
      <div id="tab-2" class="tab-pane fade show p-0">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product  WHERE category = 'Beef'";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?= ($row['price']) + ($row['price'] * 0.25); ?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-eye text-primary me-2"></i>View
                        detail</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href="addToCart.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-shopping-bag text-primary me-2"></i>Add
                        to cart</a>
                    </small>
                  </div>
                </div>
              </div>
            <?php }
          } else {
            echo "No products found.";
          } ?>

        </div>
      </div>
      <div id="tab-3" class="tab-pane fade show p-0">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product   WHERE category = 'SeaFood'";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?= ($row['price']) + ($row['price'] * 0.25); ?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-eye text-primary me-2"></i>View
                        detail</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href="addToCart.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-shopping-bag text-primary me-2"></i>Add
                        to cart</a>
                    </small>
                  </div>
                </div>
              </div>
            <?php }
          } else {
            echo "No products found.";
          } ?>

        </div>
      </div>
      <div id="tab-4" class="tab-pane fade show p-0">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product   WHERE category = 'Rice'";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?= ($row['price']) + ($row['price'] * 0.25); ?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-eye text-primary me-2"></i>View
                        detail</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href="addToCart.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-shopping-bag text-primary me-2"></i>Add
                        to cart</a>
                    </small>
                  </div>
                </div>
              </div>
            <?php }
          } else {
            echo "No products found.";
          } ?>

        </div>
      </div>
      <div id="tab-5" class="tab-pane fade show p-0">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product   WHERE category = 'Chilli'";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?= ($row['price']) + ($row['price'] * 0.25); ?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-eye text-primary me-2"></i>View
                        detail</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href="addToCart.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-shopping-bag text-primary me-2"></i>Add
                        to cart</a>
                    </small>
                  </div>
                </div>
              </div>
            <?php }
          } else {
            echo "No products found.";
          } ?>

        </div>
      </div>
      <div id="tab-6" class="tab-pane fade show p-0">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product   WHERE category = 'Chicken'";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?= ($row['price']) + ($row['price'] * 0.25); ?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-eye text-primary me-2"></i>View
                        detail</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href="addToCart.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-shopping-bag text-primary me-2"></i>Add
                        to cart</a>
                    </small>
                  </div>
                </div>
              </div>
            <?php }
          } else {
            echo "No products found.";
          } ?>

        </div>
      </div>
      <div id="tab-7" class="tab-pane fade show p-0">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product  WHERE category = 'Mutton'";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?= ($row['price']) + ($row['price'] * 0.25); ?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-eye text-primary me-2"></i>View
                        detail</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href="addToCart.php?id=<?= $row['id'] ?>"><i
                          class="fa fa-shopping-bag text-primary me-2"></i>Add
                        to cart</a>
                    </small>
                  </div>
                </div>
              </div>
            <?php }
          } else {
            echo "No products found.";
          } ?>

        </div>
      </div>
      <p></p>
      <p></p>

    </div>
  </div>
</div>
<!-- Product End -->

<!-- Testimonial Start -->
<div class="container-fluid bg-light bg-icon py-6 mb-5">
  <div class="container">
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
      <h1 class="display-5 mb-3">Customer Review</h1>
      <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
          amet diam et eos. Clita erat ipsum et lorem et sit.
        </p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="" />
          <div class="ms-3">
            <h5 class="mb-1">Farah</h5>
            <span>Doctor</span>
          </div>
        </div>
      </div>
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
          amet diam et eos. Clita erat ipsum et lorem et sit.
        </p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" alt="" />
          <div class="ms-3">
            <h5 class="mb-1">Sameer</h5>
            <span>IT Student</span>
          </div>
        </div>
      </div>
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
          amet diam et eos. Clita erat ipsum et lorem et sit.
        </p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="" />
          <div class="ms-3">
            <h5 class="mb-1">Awais</h5>
            <span>IT Student</span>
          </div>
        </div>
      </div>
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
          amet diam et eos. Clita erat ipsum et lorem et sit.
        </p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" alt="" />
          <div class="ms-3">
            <h5 class="mb-1">Laraib</h5>
            <span>Manager</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->

<?php include('footer.php') ?>