<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Milk Product</title>
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




    <section class="background">
        <div class="container">
            <div class="all">
                <p class="text_small">DAIRY DASH</p>
                <p class="text_big">"Fresh Milk, Delivered Daily to Your Doorstep"</p>

            </div>
        </div>
    </section>


    <div class="img_con">
        <section class="bg">
            <div class="container">
                <div>

                    <div class="merge" style="margin-bottom: 80px;">
                        <a href="dairy-essentials.php">
                            <div class="product_name" style="font-size: 19px;">
                                <p id="width">Trending Products</p>
                            </div>
                        </a>
                        <div class="part1">
                            <div class="img_1">
                                <a href="dairy-essentials.php"><img src="milk.jpg"></a>

                            </div>
                            <div class="img_1"><a href="mithai.php"><img src="peda.jpg"></a>

                            </div>
                            <div class="img_1"><a href="srikhand.php"><img src="ElaichiShrikhand.jpg"></a>

                            </div>

                        </div>
                    </div>
                    <div class="part2">

                        <div class="right_side">
                            <a href="dairy-essentials.php"><img src="paneer.jpg"></a>
                        </div>

                        <div class="left_side">
                            <p class="price">Rs.120</p>
                            <p class="title">paneer</p>
                            <p class="sub_content">Soft, fresh, and deliciously milky — our Paneer is made from high-quality milk, perfect for curries, grilling, or snacking. A versatile staple in every kitchen.</p>
                        </div>

                    </div>
                    <div class="merge">
                        <a href="dairy-essentials.php">
                            <div class="product_name">
                                <p id="width">DAIRY ESSENTIALS</p>
                                <p><u>view all</u></p>
                            </div>
                        </a>
                        <div class="part1">
                            <div class="img_1">
                                <a href="dairy-essentials.php"><img src="milk.jpg"></a>
                                <!-- <p class="content">Fresh Milk</p> -->
                            </div>
                            <div class="img_1"><a href="dairy-essentials.php"><img src="cheese.webp"></a>
                                <!-- <p class="content">Dairy Products</p> -->
                            </div>
                            <div class="img_1"><a href="dairy-essentials.php"><img src="yogurt.jpg"></a>
                                <!-- <p class="content">Curd & Probiotics</p> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg">
            <div class="container">
                <div>
                    <div class="part2">
                        <div class="left_side">
                            <p class="price">Rs.100</p>
                            <p class="title">Chocolate Ice Cream</p>
                            <p class="sub_content">Rich, creamy, and irresistibly smooth — our Chocolate Ice Cream is crafted with premium cocoa for a decadent treat that satisfies every sweet craving.</p>
                        </div>

                        <div class="right_side">
                            <a href="ice-cream.php"><img src="chocolate.jpg"></a>
                        </div>
                    </div>

                    <div class="merge">
                        <a href="ice-cream.php">
                            <div class="product_name">
                                <p id="width">ICE CREAM</p>
                                <p><u>view all</u></p>
                            </div>
                        </a>
                        <div class="part1">
                            <div class="img_1">
                                <a href="ice-cream.php"><img src="kesarpista.jpg"></a>
                                <!-- <p class="content">FOOD SOURCING</p> -->
                            </div>
                            <div class="img_1"><a href="ice-cream.php"><img src="bluberry.jpeg"></a>
                                <!-- <p class="content">MENU DEVELOPMENT</p> -->
                            </div>
                            <div class="img_1"><a href="ice-cream.php"><img src="chocolate.jpg"></a>
                                <!-- <p class="content">RESTAURANT</p> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg">
            <div class="container">
                <div>
                    <div class="part2">

                        <div class="right_side">
                            <a href="mithai.php"><img src="kesarpeda.jpg"></a>
                        </div>

                        <div class="left_side">
                            <p class="price">Rs.300</p>
                            <p class="title">kesarpista mithai</p>
                            <p class="sub_content">A delightful blend of saffron and pistachios, our Kesar Pista Mithai offers a rich, aromatic taste of tradition in every bite. Perfectly sweet, perfectly indulgent.</p>
                        </div>


                    </div>

                    <div class="merge">
                        <a href="mithai.php">
                            <div class="product_name">
                                <p id="width">MITHAI</p>
                                <p><u>view all</u></p>
                            </div>
                        </a>
                        <div class="part1">
                            <div class="img_1">
                                <a href="mithai.php"><img src="mavapeda.jpeg"></a>
                                <!-- <p class="content">FOOD SOURCING</p> -->
                            </div>
                            <div class="img_1"><a href="mithai.php"><img src="kesarpeda.jpg"></a>
                                <!-- <p class="content">MENU DEVELOPMENT</p> -->
                            </div>
                            <div class="img_1"><a href="mithai.php"><img src="burffee.jpeg"></a>
                                <!-- <p class="content">RESTAURANT</p> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg">
            <div class="container">
                <div>
                    <div class="part2">
                        <div class="left_side">
                            <p class="price">Rs.130</p>
                            <p class="title">strawberry shrikhand</p>
                            <p class="sub_content">Creamy, sweet, and bursting with fruity flavor — our Strawberry Shrikhand is a luscious twist on the classic dessert, made with thick yogurt and real strawberries for a refreshing treat.</p>
                        </div>

                        <div class="right_side">
                            <a href="srikhand.php"><img src="strawberryshrikhand.jpg"></a>
                        </div>
                    </div>

                    <div class="merge">
                        <a href="srikhand.php">
                            <div class="product_name">
                                <p id="width">SHRIKHAND</p>
                                <p><u>view all</u></p>
                            </div>
                        </a>
                        <div class="part1">
                            <div class="img_1">
                                <a href="srikhand.php"><img src="badampistashrikhand.jpeg.jpg"></a>
                                <!-- <p class="content">FOOD SOURCING</p> -->
                            </div>
                            <div class="img_1"><a href="srikhand.php"><img src="ElaichiShrikhand.jpg"></a>
                                <!-- <p class="content">MENU DEVELOPMENT</p> -->
                            </div>
                            <div class="img_1"><a href="srikhand.php"><img src="strawberryshrikhand.jpg"></a>
                                <!-- <p class="content">RESTAURANT</p> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="products">
        <?php include 'product1.php'; ?>
    </section>

    <footer>
        <div class="footer-container">
            <!-- chart_us -->
            <div class="footer-box chart_us">
                <h3 id="name">Dairy Dash</h3>
                <p>
                    📞 +91-9876543210
                </p>
                <p>📞 +91-9123456780
                </p>
                <p>✉️ contact@dairydash.com
                </p>
            </div>

            <!-- office -->
            <div class="footer-box office">
                <h4>GET TO KNOW US</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="#">Customer Support</a></li>
                </ul>
            </div>

            <!-- phone -->
            <div class="cat_soc">
                <div class="footer-box categories">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="dairy-essentials.php">Dairy Essentials</a></li>
                        <li><a href="ice-cream.php">Ice-Cream</a></li>
                        <li><a href="mithai.php">Mithai</a></li>
                        <li><a href="srikhand.php">Shrikhand</a></li>
                    </ul>
                </div>

                <!-- social -->
                <div class="social">
                    <div class="foll_icon">
                        <h4>Follow Us</h4>
                        <div class="social-icons">
                            <a href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png" alt="Twitter"></a>
                            <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" alt="Instagram"></a>
                            <a href="#"><img src="https://img.icons8.com/color/48/000000/linkedin.png" alt="LinkedIn"></a>
                            <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png" alt="Facebook"></a>
                            <a href="#"><img src="https://img.icons8.com/color/48/000000/youtube-play.png" alt="YouTube"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 <span>Dairy Dash</span>. All rights reserved.</p>
        </div>
    </footer>






</body>

<script>
    let currentSlide = 0;
    const totalSlides = document.querySelectorAll('.slide').length;
    const slider = document.querySelector('.slider');

    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }, 3000); // Change every 3 sec
</script>


</html>