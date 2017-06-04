<?php

$title = $_POST['txtTitle'];
$location = $_POST['txtLocation'];
$owner = $_POST['txtOwner'];
$ratingIds = $_POST['txtRatings'];

require("dbConnect.php");
$db = get_db();

try
{
    $query = 'INSERT INTO store(title, location, owner) VALUES (:title, :location, :owner)';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':title', $title);
    $statement->bindValue(':location', $location);
    $statement->bindValue(':owner', $owner);
    
    $statement->execute();
    
    $storeId = $db->lastInsertId("store_id_seq");
    
    foreach ($ratingIds as $ratingId)
    {
        echo "StoreId: $storeId, ratingId: $ratingId";
        
        $statement = $db->prepare('INSERT INTO store_rating(storeId, ratingId) VALUES (:storeId, :ratingId)');
        
        $statement->bindValue(':storeId', $storeId);
        $statement->bindValue(':ratingId', $ratingId);
        
        $statement->execute();
    }
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: storeRatings.php");

die();

?>