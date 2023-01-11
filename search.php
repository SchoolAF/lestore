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

        <!-- Category grid -->
        <section>
            <div class="search-banner">
                <h3>Search Result</h3>
            </div>
                <?php 
                  if(isset($_GET['search'])){
                    $search = $_GET['search'];

                    include 'src/php/db_handler.php';
                    $no = 1;
                    $data = mysqli_query($db_handler,"select * from le_product where product_name like '%".$search."%' or product_brand like '%".$search."%'");
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
                } else {
                    echo "<div class=\"search-banner\">
                            <h3>Please search something</h3>
                           </div>";
                  }
                ?>
        </section>
    </div>

    <section>
        <div class="le-footer">
                2023 - LeStore. Tradmeark may pending in some country.
        </div>
    </section>
</body>
</html>