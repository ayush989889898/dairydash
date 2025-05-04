<?php
// Database connection setup
$host = "localhost";
$dbname = "milkshop";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert into table
$sql = "INSERT INTO contact_messages (first_name, last_name, email, phone, message)
        VALUES ('$first', '$last', '$email', '$phone', '$message')";

// Show alert on result
if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Form filled successfully!');
            window.location.href='contactus.php';
          </script>";
} else {
    echo "<script>
            alert('Something went wrong. Please try again.');
            window.location.href='contactus.php';
          </script>";
}

$conn->close();
?>
