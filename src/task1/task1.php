<?php

namespace App\Task1;

/***
 * Task 1: Poor Naming and Lack of Function Extraction
 * Introduction
 * Welcome to Task 1 of our Clean Code Refactoring Workshop! In this task, we'll be focusing on
 * improving the readability and clarity of code by addressing poor naming and the lack of function
 * extraction. Clear and meaningful names are crucial for understanding code at a glance,
 * and breaking down complex logic into smaller functions can make code easier to understand
 * and maintain.
 *
 * Hint
 * Pay attention to variable and function names.
 * Look for opportunities to extract logical units into separate functions.
 */

function hdlgpt($a, $b) {
    $x = ($a * 9/5) + 32;
    $y = $b * 0.621371;
    return [$x, $y];
}

$result = hdlgpt(30, 100);

print_r($result);