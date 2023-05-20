<div>
    <h2>Manage Users</h2>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user->getId(); ?></td>
                    <td><?php echo $user->getName(); ?></td>
                    <td><?php echo $user->getEmail(); ?></td>
                    <td><?php echo $user->getRole(); ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $user->getId(); ?>">Edit</a>
                        <a href="delete_user.php?id=<?php echo $user->getId(); ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
