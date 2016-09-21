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
        include 'addSum.php';
        include 'checkWinner.php';
        
        $player1sum = 0;
        $player2sum = 0;
        $player3sum = 0;
        $player4sum = 0;
        
        $index = 0;

        shuffle($deck);
        shuffle($players);
        
        echo '<img src="' . $players[0] . '" class="player">';
        echo '<div class="cards">';
        for ($i = 0; $i < rand(4, 6); $i++) {
            echo '<img src="' . $deck[$index] . '">';
            $player1sum += addSum($deck[$index]);
            $index++;
        }
        echo '</div>';
        echo $player1sum . '<br>';
        
        echo '<img src="' . $players[1] . '" class="player">';
        echo '<div class="cards">';
        for ($i = 0; $i < rand(4, 6); $i++) {
            echo '<img src="' . $deck[$index] . '">';
            $player2sum += addSum($deck[$index]);
            $index++;
        }
        echo '</div>';
        echo $player2sum . '<br>';
        
        echo '<img src="' . $players[2] . '" class="player">';
        echo '<div class="cards">';
        for ($i = 0; $i < rand(4, 6); $i++) {
            echo '<img src="' . $deck[$index] . '">';
            $player3sum += addSum($deck[$index]);
            $index++;
        }
        echo '</div>';
        echo $player3sum . '<br>';
        
        echo '<img src="' . $players[3] . '" class="player">';
        echo '<div class="cards">';
        for ($i = 0; $i < rand(4, 6); $i++) {
            echo '<img src="' . $deck[$index] . '">';
            $player4sum += addSum($deck[$index]);
            $index++;
        }
        echo '</div>';
        echo $player4sum . '<br>';
        
        $winner = winner($player1sum, $player2sum, $player3sum, $player4sum);
        if($player1sum == $winner) {
            echo '<div class="winner">Player 1 wins!<br>';
        }
        if($player2sum == $winner) {
            echo '<div class="winner">Player 2 wins!<br>';
        }
        if($player3sum == $winner) {
            echo '<div class="winner">Player 3 wins!<br>';
        }
        if($player4sum == $winner) {
            echo '<div class="winner">Player 4 wins!<br>';
        }
        echo '</div>';
        ?>
    </body>
</html>