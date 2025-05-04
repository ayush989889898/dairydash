<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    // Destroy all session data
    session_unset();
    session_destroy();

    // Redirect to login page (or homepage)
    header("Location: login.html");
    exit();
} else {
    // If someone tries to access logout.php directly
    header("Location: index.php");
    exit();
}
