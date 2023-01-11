<?php

    session_start();
    include 'src/php/db_handler.php';

    if (!isset($_SESSION['admin_username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>LeAdmin Panel - Home</title>
</head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="nav-link" href="./index.php">LeAdmin</a>
        </div>
        
        <!-- Title -->
        <center>
            <h2>
                Hello, <?php echo $_SESSION['admin_username'];?>
            </h2>
        </center>

        <!-- Category grid -->
        <section class="grid-section">
            <div id="category-picker" class="grid-container">
                <div class="grid-product-item">
                    <a class="product-tile-link" href="add_items.php">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                        <h3>Add Product</h3>
                        <span>Add items to be listed</span>
                    </a>
                </div>

                <div class="grid-product-item">
                    <a class="product-tile-link" href="list_items.php">
                        <span class="material-symbols-outlined">
                            shopping_bag
                        </span>
                        <h3>Product list</h3>
                        <span>List all of the product</span>
                    </a>
                </div>

                <div class="grid-product-item">
                    <a class="product-tile-link" href="register.php">
                        <span class="material-symbols-outlined">
                            account_circle
                        </span>
                        <h3>Add new Admin</h3>
                        <span>Create new admin account</span>
                    </a>
                </div>

                <div class="grid-product-item">
                    <a class="product-tile-link" href="../index.php">
                        <span class="material-symbols-outlined">
                            home
                        </span>
                        <h3>Front store</h3>
                        <span>Go to public pront store page</span>
                    </a>
                </div>
            
                <div class="grid-product-item">
                    <a class="product-tile-link" href="logout.php">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        <h3>Exit</h3>
                        <span>Exit and log out from admin panel</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Customer Info -->
        <div>
         </div>
    </div>
</body>
</html>