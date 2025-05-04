<?php
session_start();
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact US Page</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <div class="topnav">

        <div class="brand">
            <!-- <img src="logo.jpg" alt="Dairy Dash Logo" class="logo"> -->
            <a href="index.php"><span class="brand-name">Dairy Dash</span></a>
        </div>

        <div class="nav-links">
            <a class="active" href="index.php">HOME</a>
            <a href="index.php#products">OUR PRODUCT</a>
            <a href="about.php">ABOUT US</a>
            <a href="contactus.php">CONTACT</a>
        </div>

        <div class="topnav-right">
            <?php if (isset($_SESSION['email'])): ?>
                <a href="logout.html">LOGOUT</a>
                <a href="addcart.php"><img src="cart.png" height="20" width="20"><?php echo $count; ?></a>
                <?php if (isset($_SESSION['order_submitted']) && $_SESSION['order_submitted'] === false): ?>
                    <a href="deliverystatus.php">
                        <img src="package.png" alt="Delivery Icon" style="width: 24px; margin-top: -9px; vertical-align: middle; margin-right: 5px;">
                    </a>
                <?php endif; ?>
            <?php else: ?>
                <a href="login.html">LOGIN</a>
                <a href="regis.html">REGISTER</a>
                <a href="addcart.php"><img src="cart.png" height="20" width="20"><?php echo $count; ?></a>
            <?php endif; ?>
        </div>

    </div>
    <section class="contact">
        <div class="content">
            <h1><b>Stay in Touch!</b></h1>

            <!-- <h2><b>Your Queries...</b></h2> -->
        </div>


        <main class="contact-container">
            <div class="contact-info">
                <h1>Contact Us</h1>
                <p>Feel free to use the form or drop us an email. Old-fashioned phone calls work too.</p>
                <ul>
                    <li>📞 +91-9876543210</li>
                    <li>✉️ contact@dairydash.com</li>
                    <li>📍 15 West 3rd St. Media, Pa. 19063</li>
                </ul>
            </div>

            <form class="contact-form" action="contact_process.php" method="POST">
                <div class="name-group">
                    <input type="text" name="first_name" placeholder="First" required />
                    <input type="text" name="last_name" placeholder="Last" required />
                </div>

                <input type="email" name="email" placeholder="example@email.com"
                    pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                    title="Please enter a valid email address"
                    required />

                <input type="tel" name="phone" placeholder="Phone Number"
                    value="<?php echo $_SESSION['phone'] ?? ''; ?>"
                    pattern="^\d{10}$"
                    title="Phone number must be 10 digits"
                    required>
                <textarea name="message" placeholder="Type your message ..." rows="4"></textarea>
                <button type="submit">Submit</button>

            </form>
        </main>
</body>

</html>


<!-- <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>4671 Sugar Camp Road, <br>Owatonna, Minnesota, <br>55060</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>9974651071</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>xyz@gmail.com</p>
                    </div>
                </div>
            </div>
        </div> -->
</section>
</body>

</html>