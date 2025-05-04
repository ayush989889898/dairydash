<?php
session_start(); // Always start session at the very top

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database
    $connect = new mysqli("localhost", "root", "", "milkshop");

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // Get form data
    $email = trim($_POST['email']);
    $pwd = $_POST['pwd'];

    // ✅ TEMPORARILY STORE THE CART before any session regeneration
    $prev_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    // Fetch user
    $stmt = $connect->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Compare password (assuming plain-text for now; you should hash this!)
        if ($pwd === $row['password']) {
            // ✅ Regenerate session for security
            session_regenerate_id(true);

            // ✅ Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;

            // ✅ RESTORE THE CART after login
            if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
                $_SESSION['cart'] = $prev_cart;
            }

            // Redirect
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('Email not found! Please register.'); window.location.href='register.html';</script>";
    }

    $stmt->close();
    $connect->close();
}
