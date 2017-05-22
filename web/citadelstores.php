<?php

$dbUser = 'rvhisotzxirgct';
$dbPassword = '1d5f38daad8d3164a83ea5d9f27a0d5efe65eba86056abcf948b360ccf31b4bf';
$dbName = 'dcd7qqpqqovmfr';
$dbHost = 'ec2-23-23-227-188.compute-1.amazonaws.com';
$dbPort '5432';

try
{
	// Create the PDO connection
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	die();
}

?>

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