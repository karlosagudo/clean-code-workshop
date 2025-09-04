<?php

/**
 * RENAMING and TYPES
 * @param int $a
 * @param int $b
 * @return array [int,int]
 */
function convertToFarenheitAndMiles(int $a, int $b): array {
    $x = ($a * 9/5) + 32;
    $y = $b * 0.621371;

    return [$x, $y];
}

$result = convertToFarenheitAndMiles(30,80);
echo "Fahrenheit: ".$result[0]. " and Miles: ". $result[1];