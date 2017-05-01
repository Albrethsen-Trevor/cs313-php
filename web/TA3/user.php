<?php

$name = $_POST["name"];
$email = $_POST["email"];
$majors = $_POST["majors"];
$comments = $_POST["comments"];
$locations = $_POST["locations"];

echo "name is {$name}", "email is {$email}", "majors is {$majors}", "comments is ${comments}", "locations is ";

foreach($locations as $index){
				switch ($index) {
					case 'na': 
						echo "North America<br>";
						break;
					case 'sa':
						echo "South America<br>";
						break;
					case 'eu': 
						echo "Europe<br>";
						break;
					case 'as':
						echo "Asia<br>";
						break;
					
				}
            }


?>