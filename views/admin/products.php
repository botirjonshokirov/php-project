<div>
    <h2>Manage Products</h2>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product->getId(); ?></td>
                    <td><?php echo $product->getName(); ?></td>
                    <td><?php echo $product->getDescription(); ?></td>
                    <td><?php echo $product->getPrice(); ?></td>
                    <td>
                        <a href="edit_product.php?id=<?php echo $product->getId(); ?>">Edit</a>
                        <a href="delete_product.php?id=<?php echo $product->getId(); ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
