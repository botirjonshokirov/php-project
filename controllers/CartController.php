<?php

require_once 'models/Product.php';
require_once 'models/Cart.php';

class CartController
{
    public function addToCart()
    {
        // Check if the product ID is provided
        if (isset($_GET['product_id'])) {
            $productId = $_GET['product_id'];

            // Retrieve the product by ID
            $product = Product::getById($productId);

            // Check if the product exists
            if ($product) {
                // Get the current cart or create a new cart if it doesn't exist
                $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : new Cart();

                // Add the product to the cart
                $cart->addProduct($product);

                // Store the cart in the session
                $_SESSION['cart'] = $cart;

                // Redirect back to the product page or cart page
                header('Location: product.php?id=' . $productId);
                exit;
            }
        }

        // Redirect to an error page or home page if the product ID is not provided or the product doesn't exist
        header('Location: error.php');
        exit;
    }

    public function viewCart()
    {
        // Get the current cart from the session
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : new Cart();

        // Render the cart view
        require 'views/cart.php';
    }

    public function removeCartItem()
    {
        // Check if the product ID is provided
        if (isset($_GET['product_id'])) {
            $productId = $_GET['product_id'];

            // Get the current cart from the session
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : new Cart();

            // Remove the product from the cart
            $cart->removeProduct($productId);

            // Update the cart in the session
            $_SESSION['cart'] = $cart;
        }

        // Redirect back to the cart page
        header('Location: cart.php');
        exit;
    }
}
