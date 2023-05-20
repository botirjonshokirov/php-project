<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Include your CSS stylesheets and other head elements -->
</head>
<body>
    <h1>Login</h1>

    <form action="login_submit.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a></p>

    <!-- Include your JavaScript scripts and other body elements -->
</body>
</html>
