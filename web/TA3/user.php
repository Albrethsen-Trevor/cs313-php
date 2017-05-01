<?php

$name = $_POST["name"];
$email = $_POST["email"];
$majors = $_POST["majors"];
$comments = $_POST["comments"];
$locations = $_POST["locations"];

echo "name is {$name}", "email is {$email}", "majors is {$majors}", "comments is ${comments}", "locations is ";

foreach($locations as $index){
                echo $index;
            }

?>