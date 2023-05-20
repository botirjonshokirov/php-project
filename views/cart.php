<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <!-- Include your CSS stylesheets and other head elements -->
</head>
<body>
    <h1>Shopping Cart</h1>

    <?php if ($cart->getTotalQuantity() > 0) { ?>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart->getItems() as $item) { ?>
                    <tr>
                        <td><?php echo $item->getProduct()->getName(); ?></td>
                        <td><?php echo $item->getProduct()->getPrice(); ?></td>
                        <td><?php echo $item->getQuantity(); ?></td>
                        <td><?php echo $item->getSubtotal(); ?></td>
                        <td>
                            <a href="remove_from_cart.php?product_id=<?php echo $item->getProduct()->getId(); ?>">Remove</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td><?php echo $cart->getTotalAmount(); ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

        <a href="checkout.php">Proceed to Checkout</a>
    <?php } else { ?>
        <p>Your cart is empty.</p>
        <a href="products.php">Continue Shopping</a>
    <?php } ?>

    <!-- Include your JavaScript scripts and other body elements -->
</body>
</html>
