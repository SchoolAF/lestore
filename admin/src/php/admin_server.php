<?php

session_start();

// initializing variables
$admin_username = "";
$real_name    = "";
$errors = array();

include('db_handler.php');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $admin_username = mysqli_real_escape_string($db_handler, $_POST['admin_username']);
  $real_name = mysqli_real_escape_string($db_handler, $_POST['real_name']);
  $password_1 = mysqli_real_escape_string($db_handler, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db_handler, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($admin_username)) { array_push($errors, "Username is required"); }
  if (empty($real_name)) { array_push($errors, "Your name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or real_name
  $user_check_query = "SELECT * FROM le_admin WHERE admin_username='$admin_username' OR real_name='$real_name' LIMIT 1";
  $result = mysqli_query($db_handler, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['admin_username'] === $admin_username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO le_admin (admin_username, real_name, password)
  			  VALUES('$admin_username', '$real_name', '$password')";
  	mysqli_query($db_handler, $query);
  	$_SESSION['admin_username'] = $admin_username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

// ...
// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $admin_username = mysqli_real_escape_string($db_handler, $_POST['admin_username']);
  $password = mysqli_real_escape_string($db_handler, $_POST['password']);

  if (empty($admin_username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM le_admin WHERE admin_username='$admin_username' AND password='$password'";
  	$results = mysqli_query($db_handler, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin_username'] = $admin_username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>