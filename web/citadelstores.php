<?php

require("dbConnect.php");
$db = get_db();

$query = 'SELECT title, location, owner FROM store';

$statement = $db->prepare($query);
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html>
<head>
    <title>Mass Effect Stores and User Ratings</title>
</head>
<body>
    <h1>List of Stores and User Ratings</h1>
    
    <?php
        foreach ($results as $row) {
            echo '<p>';
            echo '<strong>' . $row['title'] . ' ' . $row['location'] . ' ';
            echo $row['owner'] . '</strong>';
            echo '<br />';
            echo 'Ratings: ';
    }
    ?>
    
</body>
</html>