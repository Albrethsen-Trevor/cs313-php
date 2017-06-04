<?php

require("dbConnect.php");
$db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Rating Entry</title>
    <link rel="stylesheet" href="/main.css">
</head>
    
<body>

<div>

    <h1>Enter Your Store Review</h1>
    
    <form id="mainForm" action="insertRating.php" method="POST">
        
        <input type="text" id="txtTitle" name="txtTitle">
        <label for="txtTitle">Title</label>
        <br /><br />
    
        <input type="text" id="txtLocation" name="txtLocation">
        <label for="txtLocation">Location</label>
        <br /><br />
        
        <input type="text" id="txtOwner" name="txtOwner">
        <label for="txtOwner">Owner</label>
        <br /><br />
        
        <label>Ratings:</label><br />
    
<?php
    
try
{
    $statement = $db->prepare('SELECT id, review FROM rating');
    $statement->execute();
    
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $id = $row['id'];
        $name = $row['review'];
        
        echo "<input type='text' name='txtTopics[]' id='txtTopics$id' value='$id'>";
        
        echo "<label for='txtTopics$id'>$review</label><br />";
        
        echo "\n"
    }
}
catch (PDOException $ex)
{
    echo "Error connecting to DB. Details: $ex";
    die();
}
    
?>
    
    <br />
    
    <input type="submit" value="Add Your Review" />
    
</form>
    
</div>
    
</body>
</html>