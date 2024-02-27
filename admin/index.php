<?php include('header.php');
require_once("db_connection.php");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>



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
      <div class="col-lg-4">
        <div style="margin-bottom:50px">
          <form action="" method="GET" class="input-group">
            <input type="text" class="form-control" placeholder="Search products..." name="q" />
            <button type="submit" class="btn btn-outline-primary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="col-lg-4 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">All</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Meat</a>
          </li>
          <li class="nav-item me-0">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">SeaFood</a>
          </li>
          <li class="nav-item me-0">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-4">Rice</a>
          </li>
          <li class="nav-item me-0">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-5">Chilli</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="tab-content">
      <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">
          <?php

          $query = "SELECT * FROM product";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="../img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?=($row['price'])+($row['price']*0.25);?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php"><i class="fa fa-eye text-primary me-2"></i>Edit</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href=""><i class="fa fa-trash text-primary me-2"></i>Delete</a>
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

          $query = "SELECT * FROM product  WHERE category = 'Meat' ";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="../img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?=($row['price'])+($row['price']*0.25);?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php"><i class="fa fa-eye text-primary me-2"></i>Edit</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href=""><i class="fa fa-trash text-primary me-2"></i>Delete</a>
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

          $query = "SELECT * FROM product   WHERE category = 'SeaFood' ";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="../img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?=($row['price'])+($row['price']*0.25);?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php"><i class="fa fa-eye text-primary me-2"></i>Edit</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href=""><i class="fa fa-trash text-primary me-2"></i>Delete</a>
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

          $query = "SELECT * FROM product   WHERE category = 'Rice' ";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="../img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?=($row['price'])+($row['price']*0.25);?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php"><i class="fa fa-eye text-primary me-2"></i>Edit</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href=""><i class="fa fa-trash text-primary me-2"></i>Delete</a>
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

          $query = "SELECT * FROM product   WHERE category = 'Chilli' ";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { 
              // $discountedPrice = $row['price']+$row['price'];
              ?>

              <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                  <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="../img/<?= $row['productImage'] ?>" alt="" />

                  </div>
                  <div class="text-center p-4">
                    <a class="d-block h5 mb-2" href="">
                      <?= $row['productName'] ?>
                    </a>
                    <span class="text-primary me-1">$
                      <?= $row['price'] ?>
                    </span>
                    <span class="text-body text-decoration-line-through">$
                      <?=($row['price'])+($row['price']*0.25);?>
                    </span>
                  </div>
                  <div class="d-flex border-top">
                    <small class="w-50 text-center border-end py-2">
                      <a class="text-body" href="productDetails.php"><i class="fa fa-eye text-primary me-2"></i>Edit</a>
                    </small>
                    <small class="w-50 text-center py-2">
                      <a class="text-body" href=""><i class="fa fa-trash text-primary me-2"></i>Delete</a>
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
    </div>
  </div>
</div>
<!-- Product End -->

<?php include('footer.php') ?>