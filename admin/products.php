<?php
require_once './includes/config.php';
require_once './includes/session.php';
require_once './includes/auth.php';
require_once '../models/Product.php';

// Redirect to login page if not logged in
if (!authenticate()) {
    redirect('login.php');
}

// Get all products
$products = Product::getAll();

// Include the header
include_once './includes/header.php';
?>

<div class="container">
    <h2>Products</h2>
    <a href="product-create.php" class="btn btn-primary mb-2">Add Product</a>
    <table class="table">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product->getId(); ?></td>
                    <td><?php echo $product->getName(); ?></td>
                    <td><?php echo $product->getPrice(); ?></td>
                    <td><?php echo $product->getCategory(); ?></td>
                    <td>
                        <a href="product-edit.php?id=<?php echo $product->getId(); ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="product-delete.php?id=<?php echo $product->getId(); ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
// Include the footer
include_once './includes/footer.php';
?>
