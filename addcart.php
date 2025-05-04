<?php
session_start();

$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="addcart.css">

</head>

<body>
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
            <?php endif; ?>
        </div>

    </div>

    <h1 align="center" style="margin-top: 45px;">MY CART</h1>
    <table align='center' border='1'>
        <tr>
            <th>Serial No.</th>
            <th>Item Image</th>
            <th>Item Name</th>
            <th>Item Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th></th>
            <?php
            $total = 0; // Initialize total variable
            if (isset($_SESSION['cart'])) {
                $sr = 0; // Initialize serial number variable
                foreach ($_SESSION['cart'] as $key => $value) {
                    $sr++; // Increment serial number for each item
                    $total += $value['Price'] * $value['Quantity']; // Accumulate total price
                    echo "
                <tr>
                    <td>$sr</td>
                    <td><img src='{$value['Image']}' height='90' width='120'></td>
                    <td>{$value['Item_Name']}</td>
                    <td>{$value['Price']}<input type='hidden' class='iprice' value='{$value['Price']}'></td>
                    <td><input class='iquantity' type='number' value='{$value['Quantity']}' min='1' max='10'></td>
                    <td class='itotal'>0</td>
                    <td>
                        <form action='managecart.php' method='POST'>
                            <button type='submit' name='remove_item'>REMOVE</button>
                            <input type='hidden' name='Item_Name' value='{$value['Item_Name']}'>
                        </form>
                    </td>
                </tr>
            ";
                }
            }
            ?>
        <tr>
            <td colspan='5'>Grand Total</td>
            <td id='gtotal'><?php echo $total; ?></td>
        </tr>
    </table>

    <div class="button1">
        <button onclick="openModal()">Place Order</button>
    </div>

    <script>
        var gt = <?php echo $total; ?>;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (var i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt += (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }

        // Call subTotal() function whenever quantity changes
        for (var i = 0; i < iquantity.length; i++) {
            iquantity[i].addEventListener('change', subTotal);
        }

        // Call subTotal() function initially
        subTotal();




        function openModal() {
            document.getElementById("orderModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("orderModal").style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById("orderModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <?php if ($count > 0): ?>
        <!-- <button onclick="openModal()">Place Order</button> -->
    <?php else: ?>
        <script>
            alert("Your cart is empty. Please add items before placing an order.");
            window.location.href = "index.php";
        </script>
    <?php endif; ?>


    <!-- Modal Background -->
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Shipping Details</h2>
            <form action="placeorder.php" method="POST">
                <input type="text" name="name" placeholder="Name" value="<?php echo $_SESSION['first_name'] ?? ''; ?>" required><br>
                <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $_SESSION['lname'] ?? ''; ?>" required><br>
                <input type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email'] ?? ''; ?>" required><br>
                <input type="tel" name="phone" placeholder="Phone Number"
                    value="<?php echo $_SESSION['phone'] ?? ''; ?>"
                    pattern="^\d{10}$"
                    title="Phone number must be 10 digits"
                    required><br>
                <input type="text" name="address" placeholder="Address" value="<?php echo $_SESSION['address'] ?? ''; ?>" required><br>
                <input type="text" name="city" placeholder="City" value="<?php echo $_SESSION['city'] ?? ''; ?>" required><br>
                <input type="text" name="pincode" placeholder="Pincode"
                    value="<?php echo $_SESSION['pincode'] ?? ''; ?>"
                    pattern="^\d{6}$"
                    title="Pincode must be exactly 6 digits"
                    required><br><br>

                <a href="deliverystatus.php"><button type="submit" name="submit">Submit Order</button></a>
            </form>
        </div>
    </div>



</body>

</html>