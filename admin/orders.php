<?php
require_once './includes/config.php';
require_once './includes/session.php';
require_once './includes/auth.php';
require_once '../models/Order.php';

// Redirect to login page if not logged in
if (!authenticate()) {
    redirect('login.php');
}

// Get all orders
$orders = Order::getAll();

// Include the header
include_once './includes/header.php';
?>

<div class="container">
    <h2>Orders</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?php echo $order->getId(); ?></td>
                    <td><?php echo $order->getCustomerName(); ?></td>
                    <td><?php echo $order->getOrderDate(); ?></td>
                    <td><?php echo $order->getTotalAmount(); ?></td>
                    <td><?php echo $order->getStatus(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
// Include the footer
include_once './includes/footer.php';
?>
