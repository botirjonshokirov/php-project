<?php

require_once 'models/Order.php';

class OrderController
{
    public function viewOrder($orderId)
    {
        // Retrieve the order by ID
        $order = Order::getById($orderId);

        // Check if the order exists
        if ($order) {
            // Render the order view
            require 'views/order.php';
        } else {
            // Redirect to an error page or display an error message
            header('Location: error.php');
            exit;
        }
    }

    public function viewAllOrders()
    {
        // Retrieve all orders
        $orders = Order::getAll();

        // Render the all orders view
        require 'views/all_orders.php';
    }
}
