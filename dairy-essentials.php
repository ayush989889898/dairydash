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
            <!-- <img src="logo.jpg" alt="Dairy Dash Logo" class="logo"> -->
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
            <img src="milk.jpg" alt="Milk 500ml">
            <div class="product-info">
                <h3>Milk (500ml)</h3>
                <p><strong>Rs. 39</strong>&nbsp;&nbsp;<del>Rs. 49</del></p>
                <p><span class="discount">(20% OFF)</span></p>
                <p class="desc">Fresh toned milk, rich in calcium and essential nutrients. Great for daily consumption.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Milk(500ml)">
            <input type="hidden" name="Price" value="39">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="ghee.jpg" alt="Ghee 1L">
            <div class="product-info">
                <h3>Ghee (1L)</h3>
                <p><strong>Rs. 750</strong>&nbsp;&nbsp;<del>Rs. 850</del></p>
                <p><span class="discount">(12% OFF)</span></p>
                <p class="desc">Pure desi ghee made from cow milk. Ideal for cooking, sweets, and traditional dishes.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Ghee(1L)">
            <input type="hidden" name="Price" value="750">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="curd.jpg" alt="Curd 100gms">
            <div class="product-info">
                <h3>Curd (100gms)</h3>
                <p><strong>Rs. 60</strong>&nbsp;&nbsp;<del>Rs. 75</del></p>
                <p><span class="discount">(20% OFF)</span></p>
                <p class="desc">Thick, creamy curd with live cultures. Helps in digestion and boosts immunity.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Curd(100gms)">
            <input type="hidden" name="Price" value="60">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="butter.jpg" alt="Butter 200gms">
            <div class="product-info">
                <h3>Butter (200gms)</h3>
                <p><strong>Rs. 250</strong>&nbsp;&nbsp;<del>Rs. 280</del></p>
                <p><span class="discount">(11% OFF)</span></p>
                <p class="desc">Salted dairy butter, perfect for toast, baking, and cooking. Rich and flavorful.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Butter(200gms)">
            <input type="hidden" name="Price" value="250">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="cheese.webp" alt="Cheese 200gms">
            <div class="product-info">
                <h3>Cheese (200gms)</h3>
                <p><strong>Rs. 150</strong>&nbsp;&nbsp;<del>Rs. 190</del></p>
                <p><span class="discount">(21% OFF)</span></p>
                <p class="desc">Soft processed cheese, ideal for sandwiches, pizzas, and snacking.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Cheese(200gms)">
            <input type="hidden" name="Price" value="150">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="cottage-cheese.jpg" alt="Cottage Cheese 200gms">
            <div class="product-info">
                <h3>Cottage Cheese (200gms)</h3>
                <p><strong>Rs. 200</strong>&nbsp;&nbsp;<del>Rs. 240</del></p>
                <p><span class="discount">(17% OFF)</span></p>
                <p class="desc">Fresh paneer made from cow milk. High in protein and soft in texture.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Cottage-Cheese(200gms)">
            <input type="hidden" name="Price" value="200">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="paneer.jpg" alt="Paneer 500gms">
            <div class="product-info">
                <h3>Paneer (500gms)</h3>
                <p><strong>Rs. 120</strong>&nbsp;&nbsp;<del>Rs. 160</del></p>
                <p><span class="discount">(25% OFF)</span></p>
                <p class="desc">Rich in protein, ideal for curries and grilling. Fresh and soft texture guaranteed.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Paneer(500gms)">
            <input type="hidden" name="Price" value="120">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="chaas.jpg" alt="Plain Chaas">
            <div class="product-info">
                <h3>Plain Chaas</h3>
                <p><strong>Rs. 70</strong>&nbsp;&nbsp;<del>Rs. 85</del></p>
                <p><span class="discount">(18% OFF)</span></p>
                <p class="desc">Refreshing buttermilk with a hint of cumin. Perfect for digestion and hydration.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Plain Chaas">
            <input type="hidden" name="Price" value="70">
        </div>
    </form>

    <form action="managecart.php" method="post">
        <div class="item">
            <img src="cream.jpg" alt="Dairy Cream 200ml">
            <div class="product-info">
                <h3>Dairy Cream (200ml)</h3>
                <p><strong>Rs. 120</strong>&nbsp;&nbsp;<del>Rs. 150</del></p>
                <p><span class="discount">(20% OFF)</span></p>
                <p class="desc">Thick and smooth cream, great for desserts, coffee, and creamy sauces.</p>
            </div>
            <button type="submit" name="addtocart" class="btn">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Dairy cream(200ml)">
            <input type="hidden" name="Price" value="120">
        </div>
    </form>

</selection>


</body>

</html>