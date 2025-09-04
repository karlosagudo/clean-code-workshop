<?php

namespace App\Task1\Classes;

final readonly class Unit
{
    /**
     * @param int|float $value
     * @param string $unit i.e: celsius, fahrenheit, kilometer, mile
     * @param string $measure
     */
    public function __construct(private int|float $value, private string $unit, private string $measure)
    {
    }

    public function getValue(): int|float
    {
        return $this->value;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getMeasure(): string
    {
        return $this->measure;
    }

}