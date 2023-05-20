<?php
require_once './includes/config.php';
require_once './includes/session.php';
require_once './includes/auth.php';
require_once '../models/User.php';

// Redirect to login page if not logged in
if (!authenticate()) {
    redirect('login.php');
}

// Get all users
$users = User::getAll();

// Include the header
include_once './includes/header.php';
?>

<div class="container">
    <h2>Users</h2>
    <table class="table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user->getId(); ?></td>
                    <td><?php echo $user->getName(); ?></td>
                    <td><?php echo $user->getEmail(); ?></td>
                    <td><?php echo $user->getRole(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
// Include the footer
include_once './includes/footer.php';
?>
