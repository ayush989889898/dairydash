<?php
session_start();
?>
<html>

<head>
    <title>Online milk product</title>
    <link rel="stylesheet" href="p1.css">
</head>

<body>
    <?php
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <!-- <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="product1.php">OUR PRODUCT</a>
        <a href="about.php">ABOUT US</a>
        <a href="contactus.php">CONTACT</a>
        <div class="topnav-right">   
        <a href="logout.html">LOGOUT</a>
        <a href="addcart.php"><img src="cart.png" height="20" width="20"><?php echo $count; ?></a>
        </div>
    </div> -->
    <selection id="banner">
        <div class="img">
            <div class="banner-text">
                <h1 style="color:white">Online Milk Products</h1>
                <p style="color:white"><b>Healthy Pure and Fresh Milk Products</b><br>in your Doorstep!</p>
                <div class="banner-btn">
                    <a href="login.html"><span></span>Login</a>
                    <a href="regis.html"><span></span>Registration</a> 
                </div>
            </div>
    </selection>
</body>

</html>