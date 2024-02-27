<?php include('header.php'); ?>

<?php
// Initialize alert message
$alertMessage = "";

// Check if form is submitted
if (isset($_POST["submit"])) {
    // Connect to your database
    require_once("db_connection.php");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image = mysqli_real_escape_string($conn, $_FILES['product_image']['name']);

    // Upload image to directory
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
        // Insert data into product table
        $sql = "INSERT INTO product (productName, price, description, productImage) VALUES ('$product_name', '$price', '$description', '$image')";
        if (mysqli_query($conn, $sql)) {
            // Set success alert message
            $alertMessage = "<div class='alert alert-success' role='alert'>Product uploaded successfully</div>";
        } else {
            // Set error alert message if insertion fails
            $alertMessage = "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
        }
    } else {
        // Set error alert message if image upload fails
        $alertMessage = "<div class='alert alert-danger' role='alert'>Error uploading image</div>";
    }

    // Close database connection
    mysqli_close($conn);
}
?>
<div class="container-xxl py-6">
    <div class="container">
        <?php echo $alertMessage; ?>
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Add Product</h1>
            <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
        </div>
        <div class="row g-5 justify-content-center">

            <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                <form method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="product_name" type="text" class="form-control" id="product_name"
                                    placeholder="Product Name">
                                <label for="product_name">Product Name</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="price" type="number" class="form-control" id="price" placeholder="Price"
                                    step="0.01">
                                <label for="price">Price</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Add product description here"
                                    id="description" style="height: 200px" name="description"></textarea>
                                <label for="description">Product Description</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3" id="imagePreviewContainer" style="display: none;">
                            <img id="imagePreview" src="#" alt="Selected Image" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <label class="input-group-text" for="product_image" style="cursor: pointer;">Upload
                                    Product Image</label>
                                <input type="file" class="form-control" id="product_image" name="product_image"
                                    accept="image/*" onchange="previewImage(this)" style="display: none;">
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="submit">Upload
                                Product</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(input) {
        var preview = document.getElementById('imagePreview');
        var container = document.getElementById('imagePreviewContainer');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                container.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            container.style.display = 'none';
        }
    }
</script>

<?php include('footer.php') ?>