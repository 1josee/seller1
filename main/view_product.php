<?php
require_once('product_function.php');
// Set Variables for featured products
$featuredProductsNames = array();
$featuredProducts = readFeaturedProducts();
$featuredProductsCount = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products </title>
    <link type="text/css" rel="stylesheet" href="product.css">
</head>
<body>
    <?php
        require_once('header.php')
    ?>
    <main>
    <div class="product-header">
        <h1>All Products</h1>
    </div>
    <div class="all_products">
        <?php
            $seller = "tien";
            foreach ($featuredProducts as $featuredProduct) {
                if($featuredProduct['seller'] == $seller)
                $name = $featuredProduct['name'];
                $price = $featuredProduct['price'];
                $description = $featuredProduct['description'];
                $image = $featuredProduct['image'];
            echo "
                <div class='each_product'>
                    <img class='image' src='..\img\/".$image."' alt = 'logo'>
                    <h3>$name</h3>
                    <h3>$price</h3>
                    <h3>$description</h3>
                </div>
                ";
                $featuredProductsCount++;
                if ($featuredProductsCount == 9) {
                    break;
                }         
            }
            ?>
    </div>
    <?php
        require_once('footer.php')
    ?>
    </main>
</html>



