<?php

  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>LeStore - One-stop gaming setup store</title>
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

        <!-- Carousel 1 -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <img class="carousel-img" src="./images/slide1.png">
            </div>
        
            <div class="mySlides fade">
            <img class="carousel-img" src="./images/slide2.png">
            </div>
        
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>

        <!-- Category grid -->
        <section class="grid-section">
            <h3>Product Categories</h3>
            <div id="category-picker" class="grid-container">
                <div class="grid-item">
                    <a href="category.php?category=keyboard">
                        <img class="category-bg" src="./images/keyboard-cat.png">
                    </a>
                </div>
                <div class="grid-item">
                    <a href="category.php?category=laptop">
                        <img class="category-bg" src="./images/laptop-cat.png">
                    </a>
                </div>
                <div class="grid-item">
                    <a href="category.php?category=peripheral">
                        <img class="category-bg" src="./images/peripheral-cat.png">
                    </a>
                </div>
                <div class="grid-item">
                    <a href="category.php?category=prebuiltpc">
                        <img class="category-bg" src="./images/prebuiltpc-cat.png">
                    </a>
                </div>
            </div>
        </section>

        <!-- Category grid -->
        <section class="grid-section">
                <h3>Products</h3>
                <div id="category-picker" class="grid-container">
                <?php 
                    include 'src/php/db_handler.php';
                    $no = 1;
                    $data = mysqli_query($db_handler,"select * from le_product");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                    <div class="grid-product-item">
                        <a class="product-tile-link" href="product.php?id=<?php echo $d['id']; ?>">
                            <img class="product-thumbnail-home" src="./images/products/<?php echo $d['id']; ?>/<?php echo $d['product_picture']; ?>">
                            <h3><?php echo $d['product_name']; ?></h3>
                            <span>Rp.<?php echo $d['product_price']; ?></span>
                        </a>
                    </div>
                    <?php 
                    }
                ?>
                </div>
        </section>
    </div>

    <section>
        <div class="le-footer">
                2023 - LeStore. Tradmeark may pending in some country.
        </div>
    </section>
    
    <div>
        <a href="#" class="floatbtn-wrapper">
            <span class="material-symbols-outlined floatbt">
                shopping_cart
            </span>
        </a>
    </div>

    <!-- Carousel JS -->
    <script src="js/carousel.js"></script>
</body>
</html>