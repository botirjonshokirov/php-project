<?php

class ProductController
{
    public function show($params)
    {
        // Get the product ID from the URL parameters
        $productId = $params[1];

        // Fetch the product details from the model
        $productModel = new ProductModel();
        $product = $productModel->getProductById($productId);

        // Check if the product exists
        if ($product) {
            // Example: Render the view and pass the product data
            require 'views/product.php';
        } else {
            // Product not found, handle the error accordingly
            echo 'Product not found';
        }
    }
}
