<?php
// Assuming you have already established a database connection
require_once("db_connection.php");
// Fetch products from the database
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);

// Check if there are any products
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $productName = $row['productName'];
        $price = $row['price'];
        // You can adjust the image source based on your database schema
        $imageSource = "../img/".$row['productImage'];

        // Generate HTML for each product
        echo '<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
        echo '<div class="product-item">';
        echo '<div class="position-relative bg-light overflow-hidden">';
        echo '<img class="img-fluid w-100" src="'.$imageSource.'" alt="'.$productName.'" />';
        echo '</div>';
        echo '<div class="text-center p-4">';
        echo '<a class="d-block h5 mb-2" href="">'.$productName.'</a>';
        echo '<span class="text-primary me-1">$'.$price.'</span>';
        // Calculate the discounted price (assuming 25% off)
        $discountedPrice = $price + ($price * 0.25);
        echo '<span class="text-body text-decoration-line-through">$'.$discountedPrice.'</span>';
        echo '</div>';
        echo '<div class="d-flex border-top">';
        echo '<small class="w-50 text-center border-end py-2">';
        echo '<a class="text-body" href="productDetails.php"><i class="fa fa-eye text-primary me-2"></i>Edit</a>';
        echo '</small>';
        echo '<small class="w-50 text-center py-2">';
        echo '<a class="text-body" href=""><i class="fa fa-trash text-primary me-2"></i>Delete</a>';
        echo '</small>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No products found.";
}

// Close the database connection
mysqli_close($connection);
?>
