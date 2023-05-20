<?php

require_once 'Database.php';

class Auth
{
    public static function authenticate($email, $password)
    {
        // Get an instance of the database connection
        $db = Database::getInstance();
        $connection = $db->getConnection();

        // Prepare the SQL statement to fetch the user by email
        $query = "SELECT * FROM users WHERE email = ?";
        $statement = $connection->prepare($query);
        $statement->bind_param('s', $email);

        // Execute the statement
        $statement->execute();

        // Get the result
        $result = $statement->get_result();

        // Check if a user with the given email exists
        if ($result->num_rows === 1) {
            // Fetch the user record
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Password is correct
                // Create a User instance and return it
                $authenticatedUser = new User();
                $authenticatedUser->setId($user['id']);
                $authenticatedUser->setName($user['name']);
                $authenticatedUser->setEmail($user['email']);

                return $authenticatedUser;
            }
        }

        return false;
    }
}
