<?php
require_once 'config.php';
require_once 'session.php';

/**
 * Check if the user is authenticated.
 *
 * @return bool True if the user is authenticated, false otherwise.
 */
function authenticate()
{
    // Check if the 'user_id' session variable is set
    return isset($_SESSION['user_id']);
}

/**
 * Redirect the user to the specified page.
 *
 * @param string $page The page to redirect to.
 */
function redirect($page)
{
    header("Location: $page");
    exit();
}

/**
 * Logout the currently authenticated user.
 */
function logout()
{
    // Clear the session variables
    session_unset();
    session_destroy();

    // Redirect to the login page
    redirect('admin/login.php');
}
