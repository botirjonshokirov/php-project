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
    <h2>Settings</h2>
    <form>
        <!-- Form fields for settings -->
        <!-- Add your form fields here -->

        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
</div>

<?php
// Include the footer
include_once './includes/footer.php';
?>
