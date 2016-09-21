<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <style>
            @import url(styles.css);
        </style>
    </head>
    <body>
        <h1>SilverJack</h1>
        
        <?php
        include 'deck.php';
        shuffle($deck);
        for ($i = 0; $i < 51; $i++) {
            echo $deck[$i];
        }
        ?>
    </body>
</html>