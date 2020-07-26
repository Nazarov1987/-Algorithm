<?php
// функция SearchMissingNumbers возвращает массив пропущенных порядковых чисел
function SearchMissingNumbers($arr){
    $temp = range(reset($arr), end($arr));
    $diff = array_diff($temp, $arr);
    if(empty($diff) || empty($arr)) return '1';
    else return $diff;
}
SearchMissingNumbers([
    1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 12, 14, 15, 16
]);



