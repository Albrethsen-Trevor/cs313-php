<?php

function get_db() {
    $db = NULL;
    
    try {
        $dbUrl = getenv('DATABASE_URL');
        
        if (!isset($dbUrl) || empty($dbUrl)) {
            $dbUrl = "postgres://rvhisotzxirgct:1d5f38daad8d3164a83ea5d9f27a0d5efe65eba86056abcf948b360ccf31b4bf@ec2-23-23-227-188.compute-1.amazonaws.com:5432/dcd7qqpqqovmfr";
        }
        
        $dbopts = parse_url($dbUrl);
        
        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"],'/');
        
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    
    catch (PDOException $ex) {
		echo "Error connecting to DB. Details: $ex";
		die();
	}
    
    return $db;
}

?>