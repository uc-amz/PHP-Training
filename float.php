<?php

// Float value.


$value = 15.5;
echo $value;

// You can also assign it as:-
$value = 500_00.555;
echo $value;

// Maximum value of float.
echo PHP_FLOAT_MAX;

// Minimum value.
echo PHP_FLOAT_MIN;

// Round off value by using floor and ceil function.
$value = 5.2;
echo floor($value); // It will print 5

echo ceil($value); // It will print 6