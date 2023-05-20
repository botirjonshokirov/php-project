<?php
// Start or resume the session
session_start();

// Check if the user is logged in
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

// Redirect the user to the login page if not logged in
function checkLogin()
{
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit();
    }
}
