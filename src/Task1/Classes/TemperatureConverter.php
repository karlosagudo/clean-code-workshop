<?php

namespace App\Task1\Classes;

final class TemperatureConverter
{
    public function celsiusToFahrenheit(Unit $unit): float|int
    {
        return ($unit->getValue() * 9 / 5) + 32;
    }
}