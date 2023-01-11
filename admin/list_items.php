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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>LeAdmin - Add Items</title>
</head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="nav-link" href="./index.php">LeAdmin</a>
        </div>
        
        <!-- Title -->
        <h2>Items list</h2>

        <a href="add_items.php">
            <button class="btn_solid-lessround" name="buy_product">Buy now!</button>
        </a>

        <!-- Customer Info -->
        <div>
            <?php 
                include 'src/php/db_handler.php';
                $no = 1;
                $data = mysqli_query($db_handler,"select * from le_product");
                while($d = mysqli_fetch_array($data)){
                ?>
                    <div class="product-co-card grid-container">
                        <div class="Product-pic-grid">
                            <img class="product-thumbnail" src="../images/products/<?php echo $d['id']; ?>/<?php echo $d['product_picture']; ?>">
                        </div>
                        <div class="Product-info-grid">
                            <span class="product-overview-title"><?php echo $d['product_name']; ?></span>
                            <div>
                                <span>Rp.<?php echo $d['product_price']; ?></span>
                            </div>
            
                            <div>
                                <span class="product-overview-desc">
                                    <?php echo $d['product_short_desc']; ?>
                                </span>
                            </div>

                            <div class="item-action-button">
                                <a href="edit_items.php?id=<?php echo $d['id']; ?>">  <i class="material-icons link-icons">create</i></a>
                                <a href="src/php/delete_item.php?id=<?php echo $d['id']; ?>">  <i class="material-icons link-icons">delete</i></a>
                            </div>
                        </div>
                    </div>
                <?php 
                }
                ?>
        </div>
    </div>
</body>
</html>