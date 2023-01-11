<?php 
include 'db_handler.php';
 
// Define input variables
$id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_full_desc = $_POST['product_full_desc'];
$product_short_desc = $_POST['product_short_desc'];
$product_category = $_POST['product_category'];
$product_brand = $_POST['product_brand'];

// Update data to databse using query
mysqli_query($db_handler,"update le_product set product_name='$product_name', product_price='$product_price', product_full_desc='$product_full_desc', product_short_desc='$product_short_desc', product_category='$product_category', product_brand='$product_brand' where id='$id'");

// Redirect back to homepage
header("location:../../list_items.php");
 
?>