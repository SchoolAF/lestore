<?php 

$db_handler = mysqli_connect("localhost","root","","lestore");

// Check connection
if (mysqli_connect_errno()){
	echo "Database connection error! : " . mysqli_connect_error();
}
?>