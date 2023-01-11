<?php 
include 'db_handler.php';

// Define input variables
$order_username = $_POST['order_username'];
$product_id = $_POST['product_id'];
$order_fname = $_POST['order_fname'];
$order_lname = $_POST['order_lname'];
$order_address1 = $_POST['order_address1'];
$order_address2 = $_POST['order_address2'];
$order_city = $_POST['order_city'];
$order_district = $_POST['order_district'];
$order_province = $_POST['order_province'];
$order_postcode = $_POST['order_postcode'];
$order_phone = $_POST['order_phone'];
 
// Add data to databse using query
mysqli_query($db_handler,"insert into le_order values('','$order_username','$product_id','$order_fname','$order_lname','$order_address1','$order_address2','$order_city','$order_district','$order_province','$order_postcode','$order_phone')");
 
// Redirect back to homepage
header("location:../../index.php");
 
?>