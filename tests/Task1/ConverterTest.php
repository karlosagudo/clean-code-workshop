<?php

namespace App\Tests\Task1;

use App\Task1\Classes\Converter;
use App\Task1\Classes\Unit;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Task1\Classes\Converter
 * @covers \App\Task1\Classes\Unit
 * @covers \App\Task1\Classes\TemperatureConverter
 * @covers \App\Task1\Classes\LengthConverter
 */
class ConverterTest extends TestCase
{
    public function testTemperatureCelsiusToFahretheit(): void
    {
        $sut = new Converter();
        $unit = new Unit(37, 'celsius', 'temperature');
        $converted = $sut->convert($unit, 'Fahrenheit');
        $expected = 98.6;
        $this->assertSame($expected, $converted);
    }

    public function testLengthConverted(): void
    {
        $sut = new Converter();
        $unit = new Unit(1.7, 'kilometer', 'length');
        $converted = $sut->convert($unit, 'mile');
        $expected = 1.0563307;
        $this->assertSame($expected, $converted);
    }
}