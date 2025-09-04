<?php

namespace App\Task1;

/**
 * RENAMING and TYPES
 * @SuppressWarnings(PHPMD)
 * @param int $a
 * @param int $b
 * @return array [int,int]
 */
function convertToFahrenheitAndMiles(int $a, int $b): array {
    $x = ($a * 9/5) + 32;
    $y = $b * 0.621371;

    return [$x, $y];
}

$result = convertToFahrenheitAndMiles(30,80);
echo "Fahrenheit: ".$result[0]. " and Miles: ". $result[1];