<?php

function validBraces($braces){
    $braces = mb_eregi_replace("[^(){}\[\]]", '', $braces);
    do{$braces = str_replace(['()', '[]', '{}'], '', $braces, $count);}
    while($count);
    if (empty($braces)){
        return true;
    }else{
        return false;
    }
}
validBraces('((a + b)/ c) - 2');
