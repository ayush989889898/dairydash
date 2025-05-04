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
                <img src="badampistashrikhand.jpeg.jpg" alt="Badam Pista Shrikhand">
                <div class="product-info">
                    <h3>Badam Pista Shrikhand (250gms)</h3>
                    <p><strong>Rs. 120</strong>&nbsp;&nbsp;<del>Rs. 140</del></p>
                    <p><span class="discount">(14% OFF)</span></p>
                    <p class="desc">Creamy shrikhand blended with crushed almonds and pistachios. Traditional and rich flavor.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Badam Pista Shrikhand(250gms)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="dryfruitshrikhand.jpg" alt="Dry Fruit Shrikhand">
                <div class="product-info">
                    <h3>Dry Fruit Shrikhand (250gms)</h3>
                    <p><strong>Rs. 170</strong>&nbsp;&nbsp;<del>Rs. 190</del></p>
                    <p><span class="discount">(11% OFF)</span></p>
                    <p class="desc">Loaded with dry fruits, this shrikhand is both nutritious and delightful for sweet lovers.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Dry Fruit Shrikhand(250gms)">
                <input type="hidden" name="Price" value="170">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="ElaichiShrikhand.jpg" alt="Elaichi Shrikhand">
                <div class="product-info">
                    <h3>Elaichi Shrikhand (250gms)</h3>
                    <p><strong>Rs. 120</strong>&nbsp;&nbsp;<del>Rs. 135</del></p>
                    <p><span class="discount">(11% OFF)</span></p>
                    <p class="desc">Fragrant and smooth shrikhand infused with aromatic cardamom. A classic choice.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Elaichi Shrikhand(250gms)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="MangoShrikhand.jpg" alt="Mango Shrikhand">
                <div class="product-info">
                    <h3>Mango Shrikhand (250gms)</h3>
                    <p><strong>Rs. 140</strong>&nbsp;&nbsp;<del>Rs. 160</del></p>
                    <p><span class="discount">(13% OFF)</span></p>
                    <p class="desc">Made with real alphonso mango pulp. A seasonal favorite with tropical vibes.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mango Shrikhand(250gms)">
                <input type="hidden" name="Price" value="140">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="Rajbhogshirkhand.jpg" alt="Rajbhog Shirkhand">
                <div class="product-info">
                    <h3>Rajbhog Shirkhand (250gms)</h3>
                    <p><strong>Rs. 120</strong>&nbsp;&nbsp;<del>Rs. 150</del></p>
                    <p><span class="discount">(20% OFF)</span></p>
                    <p class="desc">Royal blend of saffron, cardamom, and dry fruits. Indulgent and flavorful.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Rajbhog Shirkhand(250gms)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="strawberryshrikhand.jpg" alt="Strawberry Shrikhand">
                <div class="product-info">
                    <h3>Strawberry Shrikhand (250ml)</h3>
                    <p><strong>Rs. 130</strong>&nbsp;&nbsp;<del>Rs. 155</del></p>
                    <p><span class="discount">(16% OFF)</span></p>
                    <p class="desc">Fruity and vibrant shrikhand made with real strawberries. A kids' favorite!</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Straw Berry Shrikhand(250ml)">
                <input type="hidden" name="Price" value="130">
            </div>
        </form>

    </selection>
</body>

</html>