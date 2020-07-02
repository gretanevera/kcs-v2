<?php

function yearCount ($startingYear)
{
    $now = date('Y');
    if ($now == $startingYear){
    echo '© '. $now; 
    }else if($startingYear > $now){
    echo '© We live in the future ' . $startingYear ;
    }else{
        echo '© '. $startingYear . " - " . $now;
    }
}
 yearCount(2020);


?>