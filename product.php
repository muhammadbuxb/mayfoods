<?php include('header.php') ?>

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
                  <img class="img-fluid w-100" src="img/Beef_mince.webp" alt="" />
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
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/beef_bong_bones.webp" alt="" />
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
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/mutton_leg.webp" alt="" />
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
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/mutton_back_chop.webp" alt="" />
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
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/whole_chicken_skinless.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Whole_Chicken_Skinless</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/chicken_drum_sticks.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Chicken_Drum_Sticks</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Mutton_Brain.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Mutton_Brain</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Beef_liver.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Beef_liver</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
              <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
            </div>
          </div>
        </div>
        <div id="tab-2" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Sea_Food.webp" alt="" />
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
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Fish.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Fish</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Fish_Cutlets.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Fish_Cutlets</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Fresh_Salmon.jpg" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Fresh_Salmon</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Crab.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Crabs</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Indus_River_Fish(Pala).jpg" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Indus_River_Fish(Pala)</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Prawns.jpg" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Prawns</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Frozen_Fish.jpg" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Frozen_Fish</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
              <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
            </div>
          </div>
        </div>
        <div id="tab-3" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Red_Chilli_Powder.webp" alt="" />
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
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Red_Crushed_Chilli.jpeg" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Red_Crushed_Chilli</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Red_whole_chilli.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Red_whole_chilli</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Green_&_Red_Chillies.avif" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Green_&_Red_Chillies</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/White_Grain_Rice.jpg" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">White_Grain_Rice</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Golden_Grain_Rice.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Golden_Grain_Rice</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Tukda_Basmati_Rice.jpg" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Tukda_Basmati_Rice</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="img/Super_Basmati_Rice.webp" alt="" />
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    New
                  </div>
                </div>
                <div class="text-center p-4">
                  <a class="d-block h5 mb-2" href="">Super_Basmati_Rice</a>
                  <span class="text-primary me-1">$19.00</span>
                  <span class="text-body text-decoration-line-through">$29.00</span>
                </div>
                <div class="d-flex border-top">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View
                      detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add
                      to cart</a>
                  </small>
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
              <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
            </div>
          </div>
        </div>
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