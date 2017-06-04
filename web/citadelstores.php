<?php

require("dbConnect.php");
$db = get_db();

$query = 'SELECT title, location, owner FROM store';
$query = 'SELECT review FROM rating';

$statement = $db->prepare($query);
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
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
    
    <h1>List of Stores and User Ratings</h1>
    
    <?php
        foreach ($results as $row) {
            echo '<p>';
            echo '<strong>' . $row['title'] . ' ' . $row['location'] . ' ';
            echo $row['owner'] . '</strong>';
            echo '<br />';
            echo '<h2>Ratings:</h2> ';
            echo '<p>';
            echo '<strong>User Review:</strong> ' . $row['review'] . ' ';
    }
    ?>
    
</body>
</html>