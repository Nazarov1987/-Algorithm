<?php

function factors($integer) {

    $arrayForDivider = [];
    for ($i = 2; $i <= $integer / $i; $i++) {
        while ($integer % $i == 0) {
            $arrayForDivider[] = $i;
            $integer = $integer / $i;
        }
    }

    if ($integer > 1) $arrayForDivider[] = $integer;
    $maxDivider = max($arrayForDivider);
    return $maxDivider;
}

factors(600851475143);