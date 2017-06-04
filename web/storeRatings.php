<?php

require("dbConnect.php");
$db = get_db();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Mass Effect Stores and User Ratings</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>

<header>
    <h1>CS 313: Web Engineering II</h1>
    <nav>  
        <div class="topnav">
          <a class="active" href= "/index.php">Home</a>
          <a href="assignments.php">Assignments</a>
        </div>
    </nav>
</header>

<div>
    
    <h1>Mass Effect Stores and User Ratings</h1>
    
    <?php
    
    try
    {
        $statement = $db->prepare('SELECT id, title, location, owner FROM store');
        $statement->execute();
        
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo '<p>';
            echo '<strong>' . $row['title'] . ' ' . $row['location'] . ' ';
            echo $row['owner'] . '</strong>';
            echo '<br />';
            echo 'Ratings: ';
            
            stmtRatings = $db->prepare('SELECT review FROM rating r'
                    . ' INNER JOIN store_rating sr ON sr.ratingId = r.id'
                    . ' WHERE sr.storeId = :storeId');
            
            $stmtRatings->bindValue(':storeId', $row['id']);
            $stmtRatings->execute();
            
            while ($ratingRow = $stmtRatings->fetch(PDO::FETCH_ASSOC))
            {
                echo $ratingRow['review'] . ' ';
            }
            
            echo '</p>';
        }
    }
    
?>

</div>

</body>
</html>