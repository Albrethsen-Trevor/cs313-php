

<!DOCTYPE html>
<html>
<head>
    <title>Vote for Your Favorite Store in the Citadel</title>
</head>
<body>
    <h1>List of Citadel Stores</h1>
    
    <?php
    
    $statement = $db->prepare("SELECT name, description FROM citadel_stores");
    statement->execute();
    
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        
        echo '<p>';
        echo '<strong>' . $row['name'] . '</strong>' . ': ' . $row['description'];
        echo '</p>';
    }

    ?>
</body>
</html>