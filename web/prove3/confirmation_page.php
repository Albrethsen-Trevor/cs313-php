<h1>Confirmation Page</h1>

<?php

session_start();

$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);
$city = htmlspecialchars($_POST["city"]);
$zip = htmlspecialchars($_POST["zip"]);
$items = $_POST["items"];
$_SESSION["cart"] = $items;



echo "Thank you, {$name}. ", "Your package will arrive at {$address}, {$city} {$zip} in about two weeks hopefully. <br>";

echo "<br>Your items: {$items}";

?>

<p><a href="browse.php">Buy More!!!</a></p>