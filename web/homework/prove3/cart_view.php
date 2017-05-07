<h1>Your Cart</h1>

<?php

session_start();

$_SESSION["cart"] = $items;
$items = $_POST["items"];


foreach($items as $index){
				switch ($index) {
					case 'bball': 
						echo "Basketball for $40<br>";
						break;
					case 'lbs':
						echo "Lonzo Ball ZO2 Sneakers for $495<br>";
						break;
					case 'hoop': 
						echo "Basketball Hoop for $100<br>";
						break;
					
				}
            }

?>

<!doctype html>
    <html>
        <head>
            <title>View Cart</title>
        </head>
        <body>
            <h2>Go to Checkout</h2>
            <a href="checkout.php">Go to Checkout</a>
            <h2>Return to Browse Page</h2>
            <a href="browse.php">Return to Browse Page</a>
        </body>
    </html>