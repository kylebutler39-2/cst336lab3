
<?php


function winner($p1, $p2, $p3, $p4)
{
    $tempWinner = 0;
    $arrayName = array($p1, $p2, $p3, $p4);

    for($i = 0 ; $i < 4; $i++)
    {
        if($arrayName[$i] <= 42 && $arrayName[$i] > $tempWinner)
        {
            $tempWinner = $arrayName[$i];
        }
    }
    return $tempWinner;
}
?>