<?php 
include "init.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="icon" type="image/x-icon" href="images/QSCU_favicon.png" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script type="text/javascript" src="libs/jquery-3.3.1.min.js">\x3C/script>')
    </script>
    <script type="text/javascript" src="script/cart_controller.js"></script>
</head>

<body>
    <main>
        <div id="cartHeader">
            <p>Your Cart</p>
        </div>
        <div id="cartMain">
            <div class="product">
                <input type="text" class="cartProductAmount" name="product" placeholder="2" maxlength="2">
                <span class="productName"><a class="aCart" href="">Ping Pong Balls</a></span>
                <span class="priceLabel">Price: $</span>
                <span class="productPrice">598.00</span>
                <span><a class="aCart" href="">remove</a></span>
            </div>
            <div class="product">
                <input type="text" class="cartProductAmount" name="product" placeholder="1" maxlength="2">
                <span class="productName"><a class="aCart" href="">Ping Pong Balls</a></span>
                <span class="priceLabel">Price: $</span>
                <span class="productPrice">299.00</span>
                <span><a class="aCart" href="">remove</a></span>
            </div>
        </div>
        <div id="cartFooter">
            <span>Total Cost: $<span id="costTotal">897.00</span>
            <button>Update Cart</button>
            <button>Check-out</button>
            </span>
        </div>
    </main>
</body>
</html>

<?php
include "footer.php";
?>