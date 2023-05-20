<?php

require_once 'models/Cart.php';
require_once 'models/Order.php';

class CheckoutController
{
    public function checkout()
    {
        // Check if the cart is not empty
        if (isset($_SESSION['cart']) && $_SESSION['cart']->getTotalQuantity() > 0) {
            // Get the current cart from the session
            $cart = $_SESSION['cart'];

            // Retrieve the user information from the session or database
            $userId = 1; // Assuming the user ID is retrieved from the session or database
            $userEmail = 'user@example.com'; // Assuming the user email is retrieved from the session or database

            // Create a new order based on the cart and user information
            $order = new Order();
            $order->setUserId($userId);
            $order->setEmail($userEmail);
            $order->setTotal($cart->getTotalAmount());

            // Save the order to the database (or perform any other necessary actions)
            $orderId = $order->save();

            // Clear the cart from the session
            unset($_SESSION['cart']);

            // Redirect to the order confirmation page or display a success message
            header('Location: order_confirmation.php?id=' . $orderId);
            exit;
        }

        // Redirect to the cart page if the cart is empty
        header('Location: cart.php');
        exit;
    }
}
