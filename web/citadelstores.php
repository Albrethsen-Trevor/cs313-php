<?php

require("dbConnect.php");
$db = get_db();

$query = 'SELECT title, location, owner FROM store';
//$query = 'SELECT name, shipment FROM inventory';


$query = 'SELECT title, location, owner FROM store';
//$query = 'SELECT name, shipment FROM inventory';


$statement = $db->prepare($query);
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html>
<head>
    <title>Stores Across the Universe</title>
</head>
<body>
    <h1>List of Stores</h1>
    
    <?php
        foreach ($results as $row) {
            echo "<p>" . $row['title'] . ' ' . $row['location'] . ' ' . $row['owner'] ."</p>";
            
            $counter++;
    }
    ?>
    
</body>
</html>