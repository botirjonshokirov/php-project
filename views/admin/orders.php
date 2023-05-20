<div>
    <h2>Manage Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Order Total</th>
                <th>Order Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><?php echo $order->getId(); ?></td>
                    <td><?php echo $order->getCustomerName(); ?></td>
                    <td><?php echo $order->getTotal(); ?></td>
                    <td><?php echo $order->getDate(); ?></td>
                    <td><?php echo $order->getStatus(); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
