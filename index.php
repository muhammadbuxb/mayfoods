<?php
session_start();
include('header.php');
require_once("admin/db_connection.php");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="img/home_2_meat.jpg" alt="Image">
        <div class="carousel-caption">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-lg-5 col-md-4">
                <h3 class="display-6 mb-10 animated slideInDown"> Premium cuts and convenient meals.
                </h3>
                <h1 class="display-3 mb-10 animated slideInDown"> Quality Frozen <span class="text-secondary">Meat
                    Seafood</span></h1>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/home_2_rice.jpg" alt="Image">
        <div class="carousel-caption">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-lg-7">
                <h3 class="display-6 mb-10 animated slideInDown"> Discover Flavor Quality and
                  Tradition</h3>
                <h1 class="display-2 mb-10 animated slideInDown"><span class="text-secondary">RICE</span> AND <span
                    class="text-secondary">SPICES</span> </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="about-img position-relative overflow-hidden p-5 pe-0">
          <img class="img-fluid w-100" src="img/about_1.jpg">
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <h1 class="display-5 mb-4">ABOUT MAY FOODS</h1>
        <p class="mb-4">We specialize in exporting premium rice, aromatic spices, and a variety of frozen
          meats including mutton, chicken, beef, as well as a selection of seafood and fishes. Our
          products are sourced from the finest local suppliers, ensuring quality and freshness with every
          order. Whether you're a culinary enthusiast or a business looking for top-notch ingredients, we
          cater to your needs with prompt delivery and competitive pricing. Explore our diverse range and
          experience the rich flavors of Pakistan delivered anywhere in the
          world.</p>
        <p><i class="fa fa-check text-primary me-3"></i>Quality frozen Meats and Seafood</p>
        <p><i class="fa fa-check text-primary me-3"></i>Premium Rice and Spices</p>
        <p><i class="fa fa-check text-primary me-3"></i>Freshness guaranteed</p>
        <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.php">Read More</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon my-5 py-6">
  <div class="container">
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
      <h1 class="display-5 mb-3">Our Features</h1>
      <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="bg-white text-center h-100 p-4 p-xl-5">
          <i class="bi bi-check-circle-fill text-primary" style="font-size: 4em;"></i>
          <!-- <img class="img-fluid mb-4" src="img/icon-1.png" alt=""> -->
          <h4 class="mb-3">Quality Assurance</h4>
          <p class="mb-4">We uphold the highest standards in sourcing and packaging, ensuring that our rice, spices, and
            frozen meats maintain their freshness, flavor, and nutritional value throughout the export process. </p>
          <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="bg-white text-center h-100 p-4 p-xl-5">
          <i class="bi bi-globe" style="font-size: 4em; color:skyblue;"></i>
          <!-- <img class="img-fluid mb-4" src="img/icon-2.png" alt=""> -->
          <h4 class="mb-3">Diverse Product Range</h4>
          <p class="mb-4">From premium Basmati rice to exotic spices and a variety of meats including mutton, chicken,
            beef, seafood, and fishes, our extensive product range caters to the diverse culinary needs of our customers
            worldwide.</p>
          <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="bg-white text-center h-100 p-4 p-xl-5">
          <i class="bi bi-truck text-secondary" style="font-size: 4em;"></i></i>
          <!-- <img class="img-fluid mb-4" src="img/icon-3.png" alt=""> -->
          <h4 class="mb-3">Efficient Export Services</h4>
          <p class="mb-4">With our base in Hyderabad, Pakistan, we offer efficient export services, ensuring timely
            delivery to our global clientele. Our streamlined processes and logistics expertise guarantee smooth
            transactions and customer satisfaction.</p>
          <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature End -->

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

          $query = "SELECT * FROM product ORDER BY id DESC LIMIT 20";
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

          $query = "SELECT * FROM product  WHERE category = 'Beef' LIMIT 20 ";
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

          $query = "SELECT * FROM product   WHERE category = 'SeaFood' LIMIT 20 ";
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

          $query = "SELECT * FROM product   WHERE category = 'Rice' LIMIT 20";
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

          $query = "SELECT * FROM product   WHERE category = 'Chilli' LIMIT 20";
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

          $query = "SELECT * FROM product   WHERE category = 'Chicken' LIMIT 20";
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

          $query = "SELECT * FROM product  WHERE category = 'Mutton' LIMIT 20";
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
      <div class="col-12 text-center">
        <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">Browse More Products</a>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

<!-- Firm Visit Start -->
<!-- <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Firm</h1>
                    <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
                </div>
            </div>
        </div>
    </div> -->
<!-- Firm Visit End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-light bg-icon py-6 mb-5">
  <div class="container">
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
      <h1 class="display-5 mb-3">Customer Review</h1>
      <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
          Clita erat ipsum et lorem et sit.</p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
          <div class="ms-3">
            <h5 class="mb-1">Farah</h5>
            <span>Doctor</span>
          </div>
        </div>
      </div>
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
          Clita erat ipsum et lorem et sit.</p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" alt="">
          <div class="ms-3">
            <h5 class="mb-1">Sameer</h5>
            <span>IT Student</span>
          </div>
        </div>
      </div>
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
          Clita erat ipsum et lorem et sit.</p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="">
          <div class="ms-3">
            <h5 class="mb-1">Awais</h5>
            <span>IT Student</span>
          </div>
        </div>
      </div>
      <div class="testimonial-item position-relative bg-white p-5 mt-4">
        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
          Clita erat ipsum et lorem et sit.</p>
        <div class="d-flex align-items-center">
          <img class="flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" alt="">
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


<!-- Blog Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
      <h1 class="display-5 mb-3">Latest Blog</h1>
      <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <img class="img-fluid" src="img/blog-1.jpg" alt="">
        <div class="bg-light p-4">
          <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
            firm</a>
          <div class="text-muted border-top pt-4">
            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <img class="img-fluid" src="img/blog-2.jpg" alt="">
        <div class="bg-light p-4">
          <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
            firm</a>
          <div class="text-muted border-top pt-4">
            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <img class="img-fluid" src="img/blog-3.jpg" alt="">
        <div class="bg-light p-4">
          <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
            firm</a>
          <div class="text-muted border-top pt-4">
            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog End -->

<?php include('footer.php') ?>