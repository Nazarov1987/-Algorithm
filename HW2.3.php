<?php

function spiralArray($horizontal, $vertical){
    if($horizontal<=0 || $vertical<=0) {
        return 'Ошибка!';
    }
    $Array = [];
    $twoDimensionalArray = [];
    for ($i=0; $i < $horizontal*$vertical; $i++){
    $Array[] = $i;
    }
    for ($j=0; $j < $vertical;$j++){
        $twoDimensionalArray[] = [];
    }
    for ($g=0; $g < $horizontal;$g++){
        $twoDimensionalArray[0][$g] = $Array[$g];
        unset($Array[$g]);
    }
    //for ($f=1; $f < $vertical;$f++){
       // $twoDimensionalArray[$f][$horizontal-1] = $Array[$f-1];
        //unset($Array[$f-1]);
        //if (count($Array) <= 0){
            //echo 'Победа';
        //}
    //}

    }


spiralArray(3, 3);