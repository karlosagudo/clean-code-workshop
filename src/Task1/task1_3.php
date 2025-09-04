<?php

namespace App\Task1;

require_once('vendor/autoload.php');

use App\Task1\Classes\Converter;
use App\Task1\Classes\Unit;

$converter = new Converter();
$celsius = new Unit(30, 'celsius', 'temperature');
$fahrenheits = $converter->convert($celsius, 'fahrentheit');

$meters = new Unit(80, 'kilometer', 'length');
$miles = $converter->convert($meters, 'mile');

echo "Fahrenheit: " . $fahrenheits. "\n";
echo "Miles: ". $miles. "\n";
