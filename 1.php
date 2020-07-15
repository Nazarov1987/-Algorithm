<?php

function actionExs1($a, $b) {
    $c = $a . $b;
    $d = str_split($c);
    sort($d);
    $i = array_unique($d);
    $g = implode($i);
    var_dump($g);
}

actionExs1("aretheyhere", "yestheyarehere");