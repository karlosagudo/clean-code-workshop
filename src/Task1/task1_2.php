<?php

/**
 * AND IN A FUNCTION MEANS 2 FUNCTIONS!
 *
 * @SuppressWarnings(PHPMD)
 */

function convertCelsiusToFahrenheit(int $celsius): int
{
    return ($celsius * 9 / 5) + 32;
}

function convertKilometersToMiles(int $kilometers): float
{
    return $kilometers * 0.621371;
}

echo "Fahrenheit: " . convertCelsiusToFahrenheit(30) . " and Miles: " . convertKilometersToMiles(80);

/*
 * But no tests, no good architecture.
 * What about Fahrenheit to Celsius?
 * What about miles to Kilometers?
 */