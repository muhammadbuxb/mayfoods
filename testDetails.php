<?php 
require_once("admin/db_connection.php");

?>

<?php 
  if (isset($_GET['id'])) {
    $productId = $_GET['id'];
          $query = "SELECT * FROM product where id = $productId";
          $result = mysqli_query($conn, $query);

          // Check if there are any products
          if (mysqli_num_rows($result) == 1) {
           $row = mysqli_fetch_assoc($result);
        //    echo $row;
           echo  $row['productName'];
           echo  $row['productImage'];
           echo $row['price'];
           echo $row['description'];

           exit;
              // $discountedPrice = $row['price']+$row['price'];
              ?>
<?php 
            }}
?>