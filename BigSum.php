<?php
// считываем числа из файла в массив
$chisla = file('chisla.txt');
// присваиваем значения массива переменным
list($varA, $varB) = $chisla;
// обрезаем лишние пробелы
$varA = trim($varA);
$varB = trim($varB);
// определяем максимальное количество символов для сложения
$maxLen = max(strlen($varA), strlen($varB));
// выравнием обе длины значения переменных
$varA = str_pad($varA, $maxLen, '0', 0);
$varB = str_pad($varB, $maxLen, '0', 0);

$result = '';
$inMind = 0;
$debug = false;
// складываем символы по порядку
for ($i = $maxLen - 1; $i >= 0; $i--) {
    $x1 = (int)$varA[$i];
    $x2 = (int)$varB[$i];

    $sum = $x1 + $x2;
    $sumFinal = $sum + $inMind;
// если сумма чисел больше 9, добавляем 1 к сумме следующей итерации цикла
    if ($sumFinal > 9) {
        $inMind = 1;
        $sumFinal %= 10;
    }else{
        $inMind = 0;
    }
// можем вывести порядок сложения
    if ($debug){
        printf('%d + %d = %d (в уме %d) пишем %d' . '<br>' , $x1, $x2, $sum, $inMind, $sumFinal);
    }
    $result = $sumFinal . $result;

}
// добавление единицы в начало числа, если это необходимо
    if ($inMind>0){
        $result = $inMind . $result;
}
// запись в файл
$fp = fopen('chisla.txt', 'a');
fwrite($fp,$result);
fclose($fp);



