<?php

namespace App\Task1\Classes;

class Converter
{
    /**
     * @param Unit $unit
     * @param string $toUnit
     * @return int
     * @throws \Exception
     */
    public function convert(Unit $unit, string $toUnit): int|float
    {
        $measure = $unit->getMeasure();
        $specificConverterClass = "App\\Task1\\Classes\\".ucfirst($measure).'Converter';
        if (!class_exists($specificConverterClass)) {
            throw new \Exception('Implement the class for the measure:'.$specificConverterClass);
        }
        $method = $unit->getUnit().'To'.ucfirst($toUnit);
        if (!method_exists($specificConverterClass, $method)) {
            throw new \Exception('Implement the method:'.$method.' in the class:'.$specificConverterClass);
        }

        return (new $specificConverterClass())->$method($unit);
    }
}
