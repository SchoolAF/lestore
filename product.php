<?php

  session_start();
  include 'src/php/db_handler.php';
  $id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>LeStore - 
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
            <a class="store-title" href="index.php"><i>LeStore</i></a>
            <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href=\"login.php\" class=\"topnav-right\"><span class=\"material-symbols-outlined\">account_circle</span>&nbspLogin</a>";
                } else {
                    echo "<a href=\"logout.php\" class=\"topnav-right\"><span class=\"material-symbols-outlined\">logout</span>&nbspLog Out</a>";
                }
            ?>
            <center>
                <div class="search-wrapper">
                    <form action="search.php" method="GET">
                        <input class="searchbox" name="search" type="text" id="searchbar" placeholder="Search here">
                        <button type="submit"><span style="font-size: 18px; padding-top: 5px;" class="material-symbols-outlined">search</span></button>
                    </form>
                </div> 
            </center>
        </div>

        <!-- Category grid -->
        <section>
            <div >
                <?php
                    $data = mysqli_query($db_handler,"select * from le_product where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <center>
                    <img class="product-picture-preview" src="./images/products/<?php echo $d['id']; ?>/<?php echo $d['product_picture']; ?>">
                </center>
            </div>
                
            <div>
                <div>
                    <h2><?php echo $d['product_name']; ?></h2>
                    <h3>Rp.<?php echo $d['product_price']; ?></h3>
                </div>
            <?php 
            }
            ?>
        </section>
        
        <section>
            
            <?php
                $data = mysqli_query($db_handler,"select * from le_product where id='$id'");
                while($d = mysqli_fetch_array($data)){
            ?>

            <a href="checkout.php?id=<?php echo $d['id']; ?>">
                <button class="btn_solid-lessround" name="buy_product">Buy now!</button>
            </a>

            <?php 
            }
            ?>
        </section>

        <!-- Category grid -->
        <div>
            <?php
                $data = mysqli_query($db_handler,"select * from le_product where id='$id'");
                while($d = mysqli_fetch_array($data)){
            ?>
            <div class="product-spec-body">
                <?php echo $d['product_full_desc']; ?>
            </div>
            <?php 
            }
            ?>
        </div>
    </div>

    <section>
        <div class="le-footer">
                2023 - LeStore. Tradmeark may pending in some country.
        </div>
    </section>
    <!-- Carousel JS -->
    <script src="js/carousel.js"></script>
</body>
</html>