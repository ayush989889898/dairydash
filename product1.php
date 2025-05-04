<!-- <?php
session_start();
?>
<html>

<head>
    <title>Online milk product</title>
    <link rel="stylesheet" href="p1.css">
</head>

<body> -->
    <?php
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>


    <div class="img_con">
        <!-- <div id="sideNav">
        </div> -->

        <section class="bg">
            <div class="container">
                <div>
                    <div class="menu">
                        <p class="big_txt">View Our Menu</p>
                        <p class="small_txt">Sample text. Click to select the Text Element.</p>
                    </div>

                    <div class="menus">
                        <div class="images">
                            <img src="milk.jpg" alt="">
                            <P class="heading">Fresh Milk</P>
                            <div class="buttons">
                                <div class="btn_1">
                                <a href="dairy-essentials.php"><button>View More</button></a></div>
                            </div>
                        </div>
                        <div class="images"> <img src="cheese - Copy.webp" alt="">
                            <P class="heading">Dairy Products</P>
                            <div class="buttons">
                                <div class="btn_1">
                                <a href="dairy-essentials.php"><button>View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="images"><img src="yogurt.jpg">
                            <P class="heading">Curd & Probiotics</P>
                            <div class="buttons">
                                <div class="btn_1">
                                <a href="dairy-essentials.php"><button>View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="images"><img src="chocolate - Copy.jpg">
                            <P class="heading">Ice Cream</P>
                            <div class="buttons">
                                <div class="btn_1">
                                <a href="ice-cream.php"><button>View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="images"><img src="KesarDryfruitBurfi.jpg">
                            <P class="heading">Mithai</P>
                            <div class="buttons">
                                <div class="btn_1">
                                <a href="mithai.php"><button>View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="images"><img src="creamshrikhand.webp">
                            <P class="heading">shrikhand</P>
                            <div class="buttons">
                                <div class="btn_1">
                                <a href="srikhand.php"><button>View More</button></a>
                                </div>
                            </div>
                        </div>

                        
                        </div>
                    </div>
                </div>
        </section>

    </div>


  
<!-- </body>

</html> -->