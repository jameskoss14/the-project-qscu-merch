<?php 
include "init.php";
include "header.php";

$user = $_SESSION["userId"]

$databaseName = "db_40215162"; //database name
$uID = "40215162"; //admin's ID
$pw = "qscu42069!"; //admin's password
$host = "cosc.360.ok.ubc.ca"; //host of database

$con = new mysqli($host, $uID, $pw, $databaseName);

if($con -> connect_errno){
    die("Connection Failed: ".$con -> connect_errno);
}

$sqlGetCart = "SELECT pNo, size, quantity, pname, price FROM HasCart, Product WHERE uid = ".$user." and HasCart.pNo = Product.pNo";

$sqlGetCartPrice = "SELECT SUM(P.price) AS cartPrice FROM HasCart H, Product P WHERE H.uid = ".$user." and H.pNo = P.pNo";

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
            <?php

            if($result = $con->query($sqlGetCart)){

                echo "<div class='product'>"

                while($prod = $result->fetch_assoc()){

                    $quant = '"'.$prod['quantity'].'"';
                    $price = '"'.$prod['price'].'"';
                    $prodName = '"'.$prod['pname'].'"';
                    $size = '"'.$prod['size'].'"';

                   echo "<input type='text' class='cartProductAmount' name='product'placeholder=$quant maxlength='2'>
                   <span class='productName'><a class='aCart' href=''>$prodName</a></span>
                    <span class='priceLabel'>Price: $</span>
                    <span class='productPrice'>$price</span>
                    <span><a class='aCart' href=''>remove</a></span>"
                }

                echo "</div>"

                }
            else{
                //error here with query, so we kill it
                die();

            }
            ?>
        </div>
        <div id="cartFooter">

            <?php

            if($resultPrice  = $con->query($sqlGetCartPrice)){

                $totalPrice = '"'.$resultPrice['cartPrice'].'"';

                echo "<span>Total Cost: $<span id='costTotal'>$totalPrice</span>
                    <button>Update Cart</button>
                    <button>Check-out</button>
                    </span>"
            }
            else{
                die();
            }
            ?>
        </div>
    </main>
</body>
</html>

<?php
include "footer.php";
?>