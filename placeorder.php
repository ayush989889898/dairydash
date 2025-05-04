<?php
session_start();
include("connection.php"); // Your DB connection

// ✅ LOGIN CHECK FIRST
if (!isset($_SESSION['email'])) { // Change 'email' if your login system uses a different session key
    echo "<script>
        alert(' Please login');
        window.location.href = 'login.html';
    </script>";
    // header("Location: login.html");
    exit();
}

// ✅ CART CHECK
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<script>
        alert('Your cart is empty. Please add items before placing an order.');
        window.location.href = 'index.php';
    </script>";
    exit();
}

$email = $_SESSION['email'];
$cart = $_SESSION['cart'];

// ✅ INSERT EACH ITEM INTO 'orders'
foreach ($cart as $item) {
    $product_name = $item['Item_Name'];
    $price = $item['Price'];
    $quantity = $item['Quantity'];
    $total = $price * $quantity;

    $query = "INSERT INTO orders (customer_email, product_name, price, quantity, total)
              VALUES ('$email', '$product_name', '$price', '$quantity', '$total')";
    
    mysqli_query($conn, $query);
}

// ✅ CLEAR CART AFTER ORDER
unset($_SESSION['cart']);

$_SESSION['order_stage'] = 1; 

$_SESSION['order_submitted'] = false;  // Reset to show the delivery icon again

// ✅ SUCCESS MESSAGE & REDIRECT
echo "<script>
    alert('Order placed successfully!');
    window.location.href = 'deliverystatus.php';
</script>";
?>
