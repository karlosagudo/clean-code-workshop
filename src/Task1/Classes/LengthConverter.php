<?php

namespace App\Task1\Classes;

final class LengthConverter
{
    public function kilometerToMile(Unit $unit): float
    {
        if ($unit->getUnit() !== 'kilometer') {
            throw new \Exception('Invalid method');
        }
        return $unit->getValue() * 0.621371;
    }
}