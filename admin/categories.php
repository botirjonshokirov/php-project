<?php include_once './includes/header.php'; ?>

<div class="container">
    <h2>Categories</h2>
    <a href="category_create.php" class="btn btn-primary">Create Category</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category) : ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td>
                        <a href="category_edit.php?id=<?php echo $category['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="category_delete.php?id=<?php echo $category['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once './includes/footer.php'; ?>
