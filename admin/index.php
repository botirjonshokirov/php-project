<?php
require_once './includes/config.php';
require_once './includes/session.php';
require_once './includes/auth.php';

// Redirect to login page if not logged in
if (!authenticate()) {
    redirect('login.php');
}

// Include the header
include_once './includes/header.php';
?>

<div class="container">
    <h2>Admin Panel</h2>
    <p>Welcome to the admin panel!</p>
</div>

<?php
// Include the footer
include_once './includes/footer.php';
?>
