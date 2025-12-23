<?php
session_start();

// Define inactivity time limit (1 hour = 3600 seconds)
$inactive_limit = 3600; // 1 hour

// Check if user is logged in
if (isset($_SESSION['last_activity'])) {
    $inactive_time = time() - $_SESSION['last_activity'];

    if ($inactive_time > $inactive_limit) {
        // User inactive for too long, destroy session and cookie
        session_unset();
        session_destroy();

        if (isset($_COOKIE['username'])) {
            setcookie("username", '', time() - 3600, "/");
        }

        // Redirect to home page
        header("Location: home.php");
        exit();
    }
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>
