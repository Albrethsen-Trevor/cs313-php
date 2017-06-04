<?php

$storeIds = $_POST['chkStores'];
$inventoryIds = $_POST['chkInventories'];
$inventoryType = $_POST['txtInventoryType'];

require("dbConnect.php");
$db = get_db();

try
{
    $query = 'INSERT INTO storeInventory(storeId, inventoryId, inventoryType) VALUES(:storeIds, :inventoryIds, :inventoryType)';
    $statement = db->prepare($query);
    
    $statement->bindValue(':storeIds', $storeIds);
    $statement->bindValue(':inventoryIds', $inventoryIds);
    $statement->bindValue(':inventoryType', $inventoryType);
    
    $statement->execute();
    
    $inventoryTypeId = $db->lastInsertId("storeInventory_id_seq");
    
    foreach ($storeIds as $storeId)
    {
        echo "StoreId: $storeId, inventoryId: $inventoryId";
        
        $statement = $db->prepare('INSERT INTO storeInventory(storeId, inventoryId) VALUES(:storeId, :inventoryId)');
        
        $statement->bindValue(':storeId', $storeId);
		$statement->bindValue(':inventoryId', $inventoryId);
		$statement->execute();
    }
}

catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: citadelstores.php");
die();

?>