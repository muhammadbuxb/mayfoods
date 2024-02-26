<?php include('header.php'); ?>



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
            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">MEAT</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">SEAFOOD</a>
          </li>
          <li class="nav-item me-0">
            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">RICE & CHILLIES</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="tab-content">
      <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="product-item">
              <div class="position-relative bg-light overflow-hidden">
                <img class="img-fluid w-100" src="../img/Beef_mince.webp" alt="" />
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  New
                </div>
              </div>
              <div class="text-center p-4">
                <a class="d-block h5 mb-2" href="">BEEF_MINCE</a>
                <span class="text-primary me-1">$19.00</span>
                <span class="text-body text-decoration-line-through">$29.00</span>
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
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="product-item">
              <div class="position-relative bg-light overflow-hidden">
                <img class="img-fluid w-100" src="../img/beef_bong_bones.webp" alt="" />
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  New
                </div>
              </div>
              <div class="text-center p-4">
                <a class="d-block h5 mb-2" href="">BEEF_BONG_BONES</a>
                <span class="text-primary me-1">$19.00</span>
                <span class="text-body text-decoration-line-through">$29.00</span>
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
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="product-item">
              <div class="position-relative bg-light overflow-hidden">
                <img class="img-fluid w-100" src="../img/mutton_leg.webp" alt="" />
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  New
                </div>
              </div>
              <div class="text-center p-4">
                <a class="d-block h5 mb-2" href="">Mutton_Leg</a>
                <span class="text-primary me-1">$19.00</span>
                <span class="text-body text-decoration-line-through">$29.00</span>
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
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="product-item">
              <div class="position-relative bg-light overflow-hidden">
                <img class="img-fluid w-100" src="../img/mutton_back_chop.webp" alt="" />
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  New
                </div>
              </div>
              <div class="text-center p-4">
                <a class="d-block h5 mb-2" href="">MUTTON_BACK_CHOP</a>
                <span class="text-primary me-1">$19.00</span>
                <span class="text-body text-decoration-line-through">$29.00</span>
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
          
        </div>
      </div>
      <div id="tab-2" class="tab-pane fade show p-0">
        <div class="row g-4">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="product-item">
              <div class="position-relative bg-light overflow-hidden">
                <img class="img-fluid w-100" src="../img/Sea_Food.webp" alt="" />
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  New
                </div>
              </div>
              <div class="text-center p-4">
                <a class="d-block h5 mb-2" href="">Sea_Food</a>
                <span class="text-primary me-1">$19.00</span>
                <span class="text-body text-decoration-line-through">$29.00</span>
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
          
          <div class="col-12 text-center">
            <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">Browse More Products</a>
          </div>
        </div>
      </div>
      <div id="tab-3" class="tab-pane fade show p-0">
        <div class="row g-4">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="product-item">
              <div class="position-relative bg-light overflow-hidden">
                <img class="img-fluid w-100" src="../img/Red_Chilli_Powder.webp" alt="" />
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  New
                </div>
              </div>
              <div class="text-center p-4">
                <a class="d-block h5 mb-2" href="">Red_Chilli_Powder</a>
                <span class="text-primary me-1">$19.00</span>
                <span class="text-body text-decoration-line-through">$29.00</span>
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
          
          <div class="col-12 text-center">
            <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">Browse More Products</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

<?php include('footer.php') ?>