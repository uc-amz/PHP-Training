<?php

// Type chacking of a variable.

$score = 75;
$price = 22.5;
$greeting = "Hello World";
$passed = true;

echo gettype($score); // It will return Integer.
echo gettype($passed); // It will return boolean.

// Another way of checking.
echo var_dump($score); // It will return int(75).
echo var_dump($greeting); // It will return string(11) "Hello World"

// Function 

declare(strict_types=1); // It will only accept two integers not other than integer value.
function sum(int $a, int $b){
    return $a+$b;
}

echo sum(5,6); // It will still work as 5+6.
// If you want to make it as it is. Then you have to declare strict type.

// Type casting
$num1 = "4";
$num2 = "5";
echo sum((int)$num1, (int)$num2); // It will return 9.