<?php

require_once 'helpers/auth.php';

class AuthController
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
            $authenticatedUser = Auth::authenticate($email, $password);

            if ($authenticatedUser) {
                // User authentication successful
                // Set the user session and redirect to the dashboard
                $_SESSION['user'] = $authenticatedUser;
                header('Location: dashboard.php');
                exit;
            } else {
                // User authentication failed
                // Display an error message
                $error = 'Invalid email or password';
            }
        }

        // Render the login view
        require 'views/login.php';
    }

    public function logout()
    {
        // Destroy the user session and redirect to the login page
        session_destroy();
        header('Location: login.php');
        exit;
    }
}
