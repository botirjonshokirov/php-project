<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <!-- Include your CSS stylesheets and other head elements -->
</head>
<body>
    <?php if ($product) { ?>
        <h1><?php echo $product->getName(); ?></h1>

        <p><?php echo $product->getDescription(); ?></p>

        <p>Price: <?php echo $product->getPrice(); ?></p>

        <a href="add_to_cart.php?product_id=<?php echo $product->getId(); ?>">Add to Cart</a>
    <?php } else { ?>
        <p>Product not found.</p>
    <?php } ?>

    <!-- Include your JavaScript scripts and other body elements -->
</body>
</html>
