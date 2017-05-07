<?php

session_start();

if (empty($_SESSION["cart"])) { $_SESSION["cart"] = array(); }

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sports Shop</title>
</head>

<body>
    <header>
        <h1>Sports Shop</h1>
    </header>
    <form action="cart_view.php" id="cart_view" method="post">
    <div class="product">
        <h3>Basketball</h3>
        <img src="basketball.jpg"><br>
        <input type="checkbox" name="items[]" value="bball">Price: $40<br>
    </div>
    <div class="product">
        <h3>Lonzo Ball ZO2 Sneakers</h3>
        <img src="lbs.jpg"><br>
        <input type="checkbox" name="items[]" value="lbs">Price: $495<br>
    </div>
    <div class="product">
        <h3>Basketball Hoop</h3><br>
        <img src="hoop.jpg"><br>
        <input type="checkbox" name="items[]" value="hoop">Price: $100<br>
    </div>
    
    <br><button type="submit">Add to Cart</button>
    
    </form>
    
    <p><a href="cart_view.php">View Cart</a></p>

</body>

</html>
