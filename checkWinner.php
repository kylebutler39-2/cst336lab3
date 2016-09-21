<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
    <style type="text/css">
        
    </style>
<?php

function update_status($p_index, $p_score, $stat)
{
    if($p_score == 42) //Winner Winner chicken dinner
        $stat[$p_index] = 2;
    
    if($p_score > 42) // DIE
        $stat[$p_index] = 0;
}


    $p1 = 0;
    $p2 = 0;
    $p3 = 0;
    $p4 = 0;
    
    
        $index = 0;
    
    
        $status = array //2 == Winner  1 == alive  0 == dead
    (
    p1 => 1,
    p2 => 1,
    p3 => 1,
    p4 => 1,
    );
    
    for($i = 0; $i < 4; $i++) // first 4 turns
    {
        // add up cards for all players
        $p1 += a[index]; 
        $p2 += a[++index];
        $p3 += a[++index];
        $p4 += a[++index];
        ++index;
        //output cards for each player
    }
    
    
    
    
    // checks status
    update_status(0,$p1,$status);
    update_status(1,$p2,$status);
    update_status(2,$p3,$status);
    update_status(3,$p4,$status);
    
    // if player has won end right here!!
    
    
    
    
    for ($i = 0; $i < 2; $i++)
    {
        
        if(status[0] == 1) // alive
            {
                $p1 += a[index];
                update_status(0,$p1,$status);
            }
            index++;
        if(status[1] == 1) // alive
            {
                $p2 += a[index];
                update_status(1,$p2,$status);
            }
            index++;
        if(status[2] == 1) // alive
            {
                $p2 += a[index];
                update_status(2,$p3,$status);
            }
            index++;
        if(status[3] == 1) // alive
            {
                $p4 += a[index];
                update_status(3,$p4,$status);
            }
            index++;
            
        
            
    }
?>


</body>

</html>