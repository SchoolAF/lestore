<?php

  session_start();
  include 'src/php/db_handler.php';
  $id = $_GET['id'];

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Checkout - 
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
    </title>
</head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="nav-link" href="index.php">Cancel</a>
        </div>
        
        <!-- Title -->
        <h2>Purchase Overview</h2>

        <!--pRODUCT oVERVIEW cARD  -->
        <?php
            $data = mysqli_query($db_handler,"select * from le_product where id='$id'");
            while($d = mysqli_fetch_array($data)){
        ?>

            <div class="product-co-card grid-container">
                <div class="Product-pic-grid">
                    <img class="product-thumbnail" src="./images/products/<?php echo $d['id']; ?>/<?php echo $d['product_picture']; ?>">
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
                </div>
            </div>
        <?php 
        }
        ?>

        <!-- Customer Info -->
        <div>
            <h2>Shipping Address</h2>
            <form method="post" action="src/php/place_order.php">
                <!-- Hidden Info -->
                <input type="hidden" name="order_username" value="<?php echo $_SESSION["username"];?>">

                <?php
                    $data = mysqli_query($db_handler,"select * from le_product where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                    <input type="hidden" name="product_id" value="<?php echo $d['id']; ?>">

                <?php 
                }
                ?>
                <!-- Name -->
                <div class="form-section grid-container">
                    <div class="half-widht-grid">
                        <div>
                            <label for="order_fname">First name</label>
                        </div>
                        <div>
                            <input class="form-input-underline" type="text" name="order_fname">
                        </div>
                    </div>
                    <div class="half-widht-grid ">
                        <div>
                            <label for="order_lname">Last Name</label>
                        </div>
                        <div>
                            <input class="form-input-underline" type="text" name="order_lname">
                        </div>
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="order_address1">Address Line 1</label>
                    </div>
                    <div>
                        <input class="form-input-underline" type="text" name="order_address1">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="order_address2">Address Line 2</label>
                    </div>
                    <div>
                        <input class="form-input-underline" type="text" name="order_address2">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="order_city">City</label>
                    </div>
                    <div>
                        <input class="form-input-underline" type="text" name="order_city">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="order_district">District</label>
                    </div>
                    <div>
                        <input class="form-input-underline" type="text" name="order_district">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="order_province">Province</label>
                    </div>
                    <div>
                        <input class="form-input-underline" type="text" name="order_province">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="order_postcode">Post Code</label>
                    </div>
                    <div>
                        <input class="form-input-underline" type="text" name="order_postcode">
                    </div>
                </div>

                <!-- NIK -->
                <div class="form-section form-single">
                    <div>
                        <label for="order_phone">Phone</label>
                    </div>
                    <div>
                        <input class="form-input-underline" type="text" name="order_phone">
                    </div>
                </div>

                <h2>Payment Information</h2>

                <!-- Submit -->
                <center>
                    <divclass="paymenthod-grid">
                        <button class="paymenthod-grid paymenthod-button paypal-btn"><B><i>PayPal</i></B></button>
                        <button class="paymenthod-grid paymenthod-button gpay-btn"><B>GPay</B></button>
                        <button class="paymenthod-grid paymenthod-button ccard-btn"><B>Card</B></button>
                        <button class="paymenthod-grid paymenthod-button ccard-btn"><B>Bank</B></button>
                    </div>
                </center>
                <!-- NIK -->
                <div class="form-section form-single">
                    <center>
                        <input class="btn_solid-main" type="submit" value="Purchase">
                    </center>
                </div>            
		    </form>
        </div>
    </div>

    <section>
        <div class="le-footer">
                2023 - LeStore. Tradmeark may pending in some country.
        </div>
    </section>
</body>
</html>