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
    <div class="topnav">
        <div class="brand">
            <a href="index.php"><span class="brand-name">Dairy Dash</span></a>
        </div>
        <div class="nav-links">
            <a href="dairy-essentials.php">DAIRY ESSENTIALS</a>
            <a href="ice-cream.php">ICE-CREAM</a>
            <a href="mithai.php">MITHAI</a>
            <a href="srikhand.php">SHRIKHAND</a>
        </div>
        <div class="topnav-right" style="margin-left: 100px;">
            <a href="addcart.php"><img src="cart.png" height="20" width="20"><?php echo $count; ?></a>
            <?php if (isset($_SESSION['order_submitted']) && $_SESSION['order_submitted'] === false): ?>
                    <a href="deliverystatus.php">
                        <img src="package.png" alt="Delivery Icon" style="width: 24px; margin-top: -9px; vertical-align: middle; margin-right: 5px;">
                    </a>
                <?php endif; ?>
        </div>
    </div>

    <selection class="items">
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="vanilla.jpg" alt="Vanilla Ice-Cream">
                <div class="product-info">
                    <h3>Vanilla Ice-Cream (500ml)</h3>
                    <p><strong>Rs. 70</strong>&nbsp;&nbsp;<del>Rs. 85</del></p>
                    <p><span class="discount">(18% OFF)</span></p>
                    <p class="desc">Classic vanilla delight made with real cream. Smooth and satisfying.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Vanilla Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="70">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="kesarpista.jpg" alt="Kesar Pista Ice-Cream">
                <div class="product-info">
                    <h3>Kesar Pista Ice-Cream (500ml)</h3>
                    <p><strong>Rs. 130</strong>&nbsp;&nbsp;<del>Rs. 150</del></p>
                    <p><span class="discount">(13% OFF)</span></p>
                    <p class="desc">A royal blend of saffron and pistachio in creamy ice-cream form.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Kesar Pista Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="130">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="chocolate.jpg" alt="Chocolate Ice-Cream">
                <div class="product-info">
                    <h3>Chocolate Ice-Cream (500ml)</h3>
                    <p><strong>Rs. 100</strong>&nbsp;&nbsp;<del>Rs. 120</del></p>
                    <p><span class="discount">(17% OFF)</span></p>
                    <p class="desc">Rich and creamy chocolate flavor made for chocoholics.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Chocolate Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="100">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="strawberry.jpg" alt="Strawberry Ice-Cream">
                <div class="product-info">
                    <h3>Strawberry Ice-Cream (500ml)</h3>
                    <p><strong>Rs. 90</strong>&nbsp;&nbsp;<del>Rs. 110</del></p>
                    <p><span class="discount">(18% OFF)</span></p>
                    <p class="desc">Creamy strawberry goodness with real fruit pulp. A fruity treat!</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Strawberry Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="90">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="mango.jpg" alt="Mango Ice-Cream">
                <div class="product-info">
                    <h3>Mango Ice-Cream (500ml)</h3>
                    <p><strong>Rs. 90</strong>&nbsp;&nbsp;<del>Rs. 105</del></p>
                    <p><span class="discount">(14% OFF)</span></p>
                    <p class="desc">Tropical mango flavor blended into luscious creamy ice-cream.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mango Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="90">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="mavamalaikulfi.jpg" alt="Mava Malai Kulfi">
                <div class="product-info">
                    <h3>Mava Malai Kulfi</h3>
                    <p><strong>Rs. 40</strong>&nbsp;&nbsp;<del>Rs. 50</del></p>
                    <p><span class="discount">(20% OFF)</span></p>
                    <p class="desc">Traditional kulfi made with thickened milk and mava richness.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mava Malai Kulfi">
                <input type="hidden" name="Price" value="40">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="kesarpistakulfi.jpg" alt="Kesar Pista Kulfi">
                <div class="product-info">
                    <h3>Kesar Pista Kulfi</h3>
                    <p><strong>Rs. 60</strong>&nbsp;&nbsp;<del>Rs. 75</del></p>
                    <p><span class="discount">(20% OFF)</span></p>
                    <p class="desc">Saffron and pistachio enriched frozen treat. Taste of tradition!</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Kesar Pista Kulfi">
                <input type="hidden" name="Price" value="60">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="malaikulfi.jpg" alt="Malai Kulfi">
                <div class="product-info">
                    <h3>Malai Kulfi</h3>
                    <p><strong>Rs. 40</strong>&nbsp;&nbsp;<del>Rs. 55</del></p>
                    <p><span class="discount">(27% OFF)</span></p>
                    <p class="desc">Classic malai kulfi, creamy and smooth with every bite.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Malai Kulfi">
                <input type="hidden" name="Price" value="40">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="blueberry.jpg" alt="Blueberry Ice-Cream">
                <div class="product-info">
                    <h3>Blueberry Ice-Cream (500ml)</h3>
                    <p><strong>Rs. 150</strong>&nbsp;&nbsp;<del>Rs. 180</del></p>
                    <p><span class="discount">(17% OFF)</span></p>
                    <p class="desc">Lush blueberry flavor in a smooth ice-cream base. A gourmet experience!</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Blueberry Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="150">
            </div>
        </form>
    </selection>
</body>

</html>
