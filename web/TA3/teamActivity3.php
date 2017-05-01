<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Team Activity 3</title>
    </head>
    <body>
        <header>
            <h1>Team Activity 3</h1>
        </header>
        
        <form action="user.php" id="user" method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br><br>
        <?php $majors = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");
            foreach($majors as $index){
                echo '<input type="radio" name="majors" value="'.$index.'">'.$index.'<br>';
            }
            ?>

        Comments: <textarea name="comments" form="user" rows="5" cols="40"></textarea><br>
<br>
        <input type="checkbox" name="locations[]" value="na">North America<br>
        <input type="checkbox" name="locations[]" value="sa">South America<br>
        <input type="checkbox" name="locations[]" value="eu">Europe<br>
        <input type="checkbox" name="locations[]" value="as">Asia<br>

        <button type="sumbit">Button</button>

        </form>
    </body>
</html>