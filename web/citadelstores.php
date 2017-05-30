<?php

$dcd7qqpqqovmfr = htmlspecialchars($_GET['dcd7qqpqqovmfr']);

$user = 'rvhisotzxirgct';
$pass = '1d5f38daad8d3164a83ea5d9f27a0d5efe65eba86056abcf948b360ccf31b4bf';
$dbName = 'dcd7qqpqqovmfr';
$dbHost = 'ec2-23-23-227-188.compute-1.amazonaws.com';
$dbPort = '5432';

try {
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $ex) {
    echo "Error connecting to the db. Details: $ex";
    die();
}

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
    
    <h1>List of Items</h1>
    
    <?php
        foreach ($results as $row) {
            echo "<p>" . $row['name'] . ' ' . $row['shipment'] ."</p>";
            
            $counter++;
    }
    ?>
    
</body>
</html>