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

        <!-- Example product block -->
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="peda.jpg" alt="Pure milk Pedas">
                <div class="product-info">
                    <h3>Pure milk Pedas (250gms)</h3>
                    <p><strong>Rs. 350</strong>&nbsp;&nbsp;<del>Rs. 420</del></p>
                    <p><span class="discount">(17% OFF)</span></p>
                    <p class="desc">Delicious pedas made from pure cow milk. Rich in texture and perfect for celebrations.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Pure milk Pedas(250gms)">
                <input type="hidden" name="Price" value="350">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="mavapeda.jpeg" alt="Mawa Peda">
                <div class="product-info">
                    <h3>Mawa Peda (250gms)</h3>
                    <p><strong>Rs. 240</strong>&nbsp;&nbsp;<del>Rs. 290</del></p>
                    <p><span class="discount">(17% OFF)</span></p>
                    <p class="desc">Classic mawa pedas, rich in flavor and made from fresh khoya and cardamom.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mawa Peda(250gms)">
                <input type="hidden" name="Price" value="240">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="brownpeda.jpg" alt="Barela Peda">
                <div class="product-info">
                    <h3>Barela Peda (250gms)</h3>
                    <p><strong>Rs. 240</strong>&nbsp;&nbsp;<del>Rs. 280</del></p>
                    <p><span class="discount">(14% OFF)</span></p>
                    <p class="desc">Brown pedas with caramelized mawa for an authentic, rich taste experience.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Barela Peda(250gms)">
                <input type="hidden" name="Price" value="240">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="kesar-Peda.jpg" alt="Sugarfree Kesari Peda">
                <div class="product-info">
                    <h3>Sugarfree Kesari Peda (250gms)</h3>
                    <p><strong>Rs. 270</strong>&nbsp;&nbsp;<del>Rs. 310</del></p>
                    <p><span class="discount">(13% OFF)</span></p>
                    <p class="desc">Healthy yet indulgent peda, infused with saffron and sweetened naturally.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Sugarfree Kesari Peda(250gms)">
                <input type="hidden" name="Price" value="270">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="burffee.jpeg" alt="Burfi">
                <div class="product-info">
                    <h3>Burfi (250gms)</h3>
                    <p><strong>Rs. 235</strong>&nbsp;&nbsp;<del>Rs. 290</del></p>
                    <p><span class="discount">(19% OFF)</span></p>
                    <p class="desc">Soft and delicious burfi made from condensed milk and a hint of cardamom.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Burfi(250gms)">
                <input type="hidden" name="Price" value="235">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="KesarDryfruitBurfi.jpg" alt="Kesar Dryfruit Burfi">
                <div class="product-info">
                    <h3>Kesar Dryfruit Burfi (250gms)</h3>
                    <p><strong>Rs. 220</strong>&nbsp;&nbsp;<del>Rs. 270</del></p>
                    <p><span class="discount">(19% OFF)</span></p>
                    <p class="desc">Luxury sweet treat packed with saffron and crunchy dry fruits. Perfect for gifting.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Kesar Dryfruit Burfi(250gms)">
                <input type="hidden" name="Price" value="220">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="pistaburfi.webp" alt="Pista Burfi">
                <div class="product-info">
                    <h3>Pista Burfi (250gms)</h3>
                    <p><strong>Rs. 275</strong>&nbsp;&nbsp;<del>Rs. 320</del></p>
                    <p><span class="discount">(14% OFF)</span></p>
                    <p class="desc">A royal delight with rich pistachio flavor and soft texture for every sweet tooth.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Pista Burfi(250gms)">
                <input type="hidden" name="Price" value="275">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="rabri.jpg" alt="Rabri">
                <div class="product-info">
                    <h3>Rabri (250ml)</h3>
                    <p><strong>Rs. 350</strong>&nbsp;&nbsp;<del>Rs. 400</del></p>
                    <p><span class="discount">(13% OFF)</span></p>
                    <p class="desc">Creamy thick rabri slow-cooked with nuts and saffron. A traditional favorite.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Rabri(250ml)">
                <input type="hidden" name="Price" value="350">
            </div>
        </form>

        <form action="managecart.php" method="post">
            <div class="item">
                <img src="yogurt.jpg" alt="Raw Milk Yogurt">
                <div class="product-info">
                    <h3>Raw Milk Yogurt (250gms)</h3>
                    <p><strong>Rs. 355</strong>&nbsp;&nbsp;<del>Rs. 400</del></p>
                    <p><span class="discount">(11% OFF)</span></p>
                    <p class="desc">Rich, creamy yogurt made from raw milk. Packed with probiotics and nutrients.</p>
                </div>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Raw Milk yogurt(250gms)">
                <input type="hidden" name="Price" value="355">
            </div>
        </form>

    </selection>
</body>

</html>
