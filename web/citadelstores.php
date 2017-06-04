<?php

require("dbConnect.php");
$db = get_db();

?>

<!doctype html>
<html>
<head>
    <title>Stores Across the Universe</title>
</head>
<body>
<h1>List of Stores</h1>

<?php
    
try
{
    $statement = db->prepare('SELECT id, title, location, owner FROM store');
    $statement->execute();
    
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        echo '<p>';
        echo '<strong>' . $row['title'] . ' ---- ' . $row['location'] . ' ---- ' . '</strong>' . ' ---- ' . $row['owner'];
        echo '<br />';
        echo 'Inventory:';
        
        $stmtInventories = $db->prepare('SELECT name FROM inventory i'
            . ' INNER JOIN storeInventory si ON si.invenotryId = i.id'
            . ' WHERE si.storeId = :storeId');
        
        stmtInventories->bindValue(':storeId', row['id']);
        stmtInventories->execute();
        
        while ($inventoryRow = $stmtInventories->fetch(PDO::FETCH_ASSOC))
        {
            echo $inventoryRow['name'] . ' ';
        }
        
        echo '</p>';
    }
} 
catch (PDOException $ex)
{
    echo "Error with DB. Details: $ex";
    die();
}

?>
    
</body>
</html>