<?php 
session_start();
include('header.php');
require_once("db_connection.php");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// if (!isset($_SESSION["admin_id"])) {
//   echo "<script>window.location.href = 'login.php';</script>";
//   exit;
// }
?>
<div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Add Blog</h1>
                <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
            </div>
            <div class="row g-5 justify-content-center">
                
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="Blog_title" type="text" class="form-control" id="Blog_title" placeholder="Blog title">
                                    <label for="Blog_title">Blog Title</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Add product description here" id="description" style="height: 200px"></textarea>
                                    <label for="description">Blog Description</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Upload Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php include('footer.php') ?>