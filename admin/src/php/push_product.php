<?php 
include 'db_handler.php';

// Define input variables
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_full_desc = $_POST['product_full_desc'];
$product_short_desc = $_POST['product_short_desc'];
$product_category = $_POST['product_category'];
$product_brand = $_POST['product_brand'];
 
// Add data to databse using query
mysqli_query($db_handler,"insert into le_product values('','$product_name','$product_price','$product_full_desc','$product_short_desc','preview.png','$product_category','$product_brand')");
 
// Redirect back to homepage
header("location:../../list_items.php");
 
?>