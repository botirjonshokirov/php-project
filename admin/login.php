<?php
require_once './includes/config.php';
require_once './includes/session.php';
require_once './includes/auth.php';

// Redirect to dashboard if already logged in
if (authenticate()) {
    redirect('index.php');
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform authentication
    if (attemptLogin($username, $password)) {
        // Redirect to dashboard on successful login
        redirect('index.php');
    } else {
        // Display error message on failed login
        $error = 'Invalid username or password.';
    }
}

// Include the header
include_once './includes/header.php';
?>

<div class="container">
    <h2>Login</h2>
    <?php if (isset($error)) : ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php
// Include the footer
include_once './includes/footer.php';
?>
