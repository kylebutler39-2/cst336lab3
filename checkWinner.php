
<?php


function winner($p1, $p2, $p3, $p4)
{
    $arrayName = array($p1, $p2, $p3, $p4);
    arsort($arrayName);
    
    
    for($i = 0 ; $i < 4; $i++)
    {
        if($arrayName[i] == 42)
        {
            return(42);
        }
        else if($arrayName[i] < 42)
        {
            return $arrayName[i];
        }
        
    }
}
?>