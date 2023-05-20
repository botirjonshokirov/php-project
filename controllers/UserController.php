<?php

require_once 'models/User.php';

class UserController
{
    public function viewProfile($userId)
    {
        // Retrieve the user by ID
        $user = User::getById($userId);

        // Check if the user exists
        if ($user) {
            // Render the user profile view
            require 'views/user_profile.php';
        } else {
            // Redirect to an error page or display an error message
            header('Location: error.php');
            exit;
        }
    }
}
