<?php

session_start();

if(!isset($_SESSION["cart"]))

?>


    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Checkout</title>
    </head>

    <body>
        <header>
            <h1>Checkout</h1>
        </header>

        <form action="confirmation_page.php" id="confirmation_page" method="post">
            Name: <input type="text" name="name"><br>
            Address: <input type="text" name="address"><br><br>
            City: <input type="text" name="city"><br>
            Zip: <input type="text" name="zip"><br><br>
            <button type="sumbit">Confirm Order</button>

        </form>
        
        <h2>Return to Cart Page</h2>
        <a href="cart_view.php">Return to Cart Page</a>
        <h2>Return to Browse Page</h2>
        <a href="browse.php">Return to Browse Page</a>

    </body>

    </html>
