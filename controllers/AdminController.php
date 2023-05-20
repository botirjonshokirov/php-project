<?php

require_once 'models/User.php';
// require_once 'config/auth.php';

class AdminController
{
    public function login()
    {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve the submitted form data
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate the form data (e.g., check if the email and password are not empty)

            // Authenticate the user
            $user = User::authenticate($email, $password);

            if ($user) {
                // User authentication successful
                // Set the user session and redirect to the admin dashboard
                $_SESSION['user'] = $user;
                header('Location: admin/dashboard.php');
                exit;
            } else {
                // User authentication failed
                // Display an error message
                $error = 'Invalid email or password';
            }
        }

        // Render the login view
        require 'views/admin/login.php';
    }

    public function logout()
    {
        // Destroy the user session and redirect to the login page
        session_destroy();
        header('Location: admin/login.php');
        exit;
    }
}
