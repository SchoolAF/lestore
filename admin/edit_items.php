<?php

    session_start();
    include 'src/php/db_handler.php';
    $id = $_GET['id'];

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
    <title>LeAdmin Edit - 
        <?php 
            include 'src/php/db_handler.php';
            $data = mysqli_query($db_handler,"select * from le_product where id='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
                <?php echo $d['product_name'];
        ?>
        <?php 
        }
        ?>
    </title></head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="nav-link" href="./index.php">LeAdmin</a>
        </div>
        
        <!-- Title -->
        <h2>Add Items</h2>

        <!-- Customer Info -->
        <div>
        <?php
            $data = mysqli_query($db_handler,"select * from le_product where id='$id'");
            while($d = mysqli_fetch_array($data)){
        ?>
            <form method="post" action="src/php/edit_product.php">
                <!-- NIK -->
                <div class="form-section form-single">
                    <input type="hidden" name="product_id" value="<?php echo $d['id']; ?>">

                    <div>
                        <label for="product_name">Product Name</label>
                    </div>
                    <div>
                        <input class="form-input-underline gimme-some-space" type="text" name="product_name" value="<?php echo $d['product_name']; ?>">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="product_price">Price</label>
                    </div>
                    <div>
                        <input class="form-input-underline gimme-some-space" type="text" name="product_price" value="<?php echo $d['product_price']; ?>">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="product_full_desc">Full Description</label>
                    </div>
                    <div>
                        <textarea class="form-textarea-underline gimme-some-space" type="text" name="product_full_desc"><?php echo $d['product_full_desc']; ?></textarea>
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="product_short_desc">Short Descrtiption</label>
                    </div>
                    <div>
                        <textarea class="form-textarea-underline gimme-some-space" type="text" name="product_short_desc"><?php echo $d['product_short_desc']; ?></textarea>
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="product_category">Product Category</label>
                    </div>
                    <div>
                        <select class="form-input-underline gimme-some-space" name="product_category" placeholder="Select Category" value="<?php echo $d['product_category']; ?>">
                            <option class="dropdown-button" value="laptop">Laptop</option>
                            <option class="dropdown-button" value="keyboard">Keyboard</option>
                            <option class="dropdown-button" value="peripheral">Peripheral</option>
                            <option class="dropdown-button" value="prebuiltpc">Prebuilt PC</option>
                        </select>
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="product_brand">Brand</label>
                    </div>
                    <div>
                        <input class="form-input-underline gimme-some-space" type="text" name="product_brand" value="<?php echo $d['product_brand']; ?>">
                    </div>
                </div>
                <div class="form-section form-single">
                    <center>
                        <input class="btn_solid-main" type="submit" value="Update item">
                    </center>
                </div>            
		    </form>
        <?php 
        }
        ?>
        </div>
    </div>
</body>
</html>