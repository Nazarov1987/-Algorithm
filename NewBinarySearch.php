<?php

function binarySearch($myArray, $num)
{
	$start = 0;
	$end = count($myArray) - 1;
	$iteration = 0;
    $repeat = 0;
	while ($start < $end) {
        $iteration++;
		$base = floor(($start + $end) / 2);

		if ($myArray[$base] == $num) {
            array_splice($myArray, $base, 1);
            $repeat++;
		}
		elseif ($myArray[$base] < $num)
			$start = $base + 1;
		else
			$end = $base - 1;
	}
	echo "Количество повторений числа $num равно: $repeat. Проведено $iteration итераций.".PHP_EOL;
	return null;
}

