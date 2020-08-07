<?php

function exponentiation($a, $n){
    if($a<1 || $a>9 || $n<1 || $n>1000){
        echo 'Ошибка в воде чисел!';
    }else{
        $number = bcpow($a, $n);
    }
    $fp = fopen('otvet.txt', 'a');
    fwrite($fp,$number);
    fclose($fp);
}

exponentiation(2, 1000);


