<?php
$dbconn = pg_connect('dbname=dcd7qqpqqovmfr');
//connect to a database named "mary"

$dbconn2 = pg_connect('host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 dbname=dcd7qqpqqovmfr');
// connect to a database named "mary" on "localhost" at port "5432"

$dbconn3 = pg_connect("host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 dbname=dcd7qqpqqovmfr user=rvhisotzxirgct password=1d5f38daad8d3164a83ea5d9f27a0d5efe65eba86056abcf948b360ccf31b4bf");
//connect to a database named "mary" on the host "sheep" with a username and password

$conn_string = 'host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 dbname=dcd7qqpqqovmfr user=rvhisotzxirgct password=1d5f38daad8d3164a83ea5d9f27a0d5efe65eba86056abcf948b360ccf31b4bf';
$dbconn4 = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password

$dbconn5 = pg_connect("host=ec2-23-23-227-188.compute-1.amazonaws.com options='--client_encoding=UTF8'");
//connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8
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