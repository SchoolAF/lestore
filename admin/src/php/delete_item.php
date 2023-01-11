
<?php 
include 'db_handler.php';
 
// Define input variables
$id = $_GET['id'];
 
// Delete data in database using query
mysqli_query($db_handler,"delete from le_product where id='$id'");

// Redirect back to homepage
header("location:../../list_items.php");
 
?>