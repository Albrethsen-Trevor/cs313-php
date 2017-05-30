<!DOCTYPE html>
<html>
<head>
    <title>Stores Across the Universe</title>
</head>
<body>
    <h1>List of Stores in the Universe</h1>
    
    <?php

$dbconn = pg_connect("host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 dbname=dcd7qqpqqovmfr user=rvhisotzxirgct password=1d5f38daad8d3164a83ea5d9f27a0d5efe65eba86056abcf948b360ccf31b4bf")
or die ("Try, and therefore sadness");
                echo 'connected!';
                $query = 'SELECT * FROM store';
                $result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());
                echo 'queried!';
?>
    
</body>
</html>