<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addtocart'])) {
        $item_name = $_POST['Item_Name'];
        $image = $_POST['Image'];
        if ($item_name === 'Vanilla Ice-Cream(500ml)') {
            $image = 'vanilla.jpg';
        } elseif ($item_name === 'Kesar Pista Ice-Cream(500ml)') {
            $image = 'kesarpista.jpg';
        } elseif ($item_name === 'Chocolate Ice-Cream(500ml)') {
            $image = 'chocolate.jpg';
        } elseif ($item_name === 'Strawberry Ice-Cream(500ml)') {
            $image = 'strawberry.jpg';
        } elseif ($item_name === 'Mango Ice-Cream(500ml)') {
            $image = 'mango.jpg';
        } elseif ($item_name === 'Mava Malai Kulfi') {
            $image = 'mavamalaikulfi.jpg';
        } elseif ($item_name === 'Kesar Pista Kulfi') {
            $image = 'kesarpistakulfi.jpg';
        } elseif ($item_name === 'Malai Kulfi') {
            $image = 'malaikulfi.jpg';
        } elseif ($item_name === 'Blueberry Ice-Cream(500ml)') {
            $image = 'blueberry.jpg';
        } elseif ($item_name === 'Milk(500ml)') {
            $image = 'milk.jpg';
        } elseif ($item_name === 'Ghee(1L)') {
            $image = 'ghee.jpg';
        } elseif ($item_name === 'Curd(100gms)') {
            $image = 'curd.jpg';
        } elseif ($item_name === 'Butter(200gms)') {
            $image = 'butter.jpg';
        } elseif ($item_name === 'Cheese(200gms)') {
            $image = 'cheese.webp';
        } elseif ($item_name === 'Cottage-Cheese(200gms)') {
            $image = 'cottage-cheese.jpg';
        } elseif ($item_name === 'Paneer(500gms)') {
            $image = 'paneer.jpg';
        } elseif ($item_name === 'Plain Chaas') {
            $image = 'chaas.jpg';
        } elseif ($item_name === 'Dairy cream(200ml)') {
            $image = 'cream.jpg';
        } elseif ($item_name === 'Pure milk Pedas(250gms)') {
            $image = 'peda.jpg';
        } elseif ($item_name === 'Mawa Peda(250gms)') {
            $image = 'mavapeda.jpeg';
        } elseif ($item_name === 'Barela Peda(250gms)') {
            $image = 'brownpeda.jpg';
        } elseif ($item_name === 'Sugarfree Kesari Peda(250gms)') {
            $image = 'kesar-Peda.jpg';
        } elseif ($item_name === 'Burfi(250gms)') {
            $image = 'burffee.jpeg';
        } elseif ($item_name === 'Kesar Dryfruit Burfi(250gms)') {
            $image = 'KesarDryfruitBurfi.jpg';
        } elseif ($item_name === 'Pista Burfi(250gms)') {
            $image = 'pistaburfi.webp';
        } elseif ($item_name === 'Rabri(250ml)') {
            $image = 'rabri.jpg';
        } elseif ($item_name === 'Raw Milk yogurt(250gms)') {
            $image = 'yogurt.jpg';
        } elseif ($item_name === 'Badam Pista Shrikhand(250gms)') {
            $image = 'badampistashrikhand.jpeg.jpg';
        } elseif ($item_name === 'Dry Fruit Shrikhand(250gms)') {
            $image = 'dryfruitshrikhand.jpg';
        } elseif ($item_name === 'Elaichi Shrikhand(250gms)') {
            $image = 'ElaichiShrikhand.jpg';
        } elseif ($item_name === 'Mango Shrikhand(250gms)') {
            $image = 'MangoShrikhand.jpg';
        } elseif ($item_name === 'Rajbhog Shirkhand(250gms)') {
            $image = 'Rajbhogshirkhand.jpg';
        } elseif ($item_name === 'Straw Berry Shrikhand(250ml)') {
            $image = 'strawberryshrikhand.jpg';
        }
        if (isset($_SESSION['cart'])) {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems)){
                echo "<script>
                alert('Item Already Added');
                window.location.href='index.php';
                </script>";

            }
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1,'Image' => $image);
            echo "<script>
            alert('Item Added');
            window.location.href='index.php';
            </script>";
        } 
        else {
            $_SESSION['cart'][0] = array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1,'Image' => $image);
            echo "<script>
            alert('Item Added');
            window.location.href='index.php';
            </script>";
        }

    }
    if(isset($_POST['remove_item'])) {
        foreach($_SESSION['cart'] as $key => $value) {
            if($value['Item_Name'] == $_POST['Item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                        alert('Item Removed');
                        window.location.href='addcart.php';
                      </script>";
                break; 
            }
        }
    }
    
}
?>
