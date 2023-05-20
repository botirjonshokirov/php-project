<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <!-- Include your CSS stylesheets and other head elements -->
</head>
<body>
    <h1>Checkout</h1>

    <form action="place_order.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br>

        <input type="submit" value="Place Order">
    </form>

    <!-- Include your JavaScript scripts and other body elements -->
</body>
</html>
