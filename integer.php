<?php

// Integer maximum value.
echo PHP_INT_MAX;

// Integer minimum value.
echo PHP_INT_MIN;

echo PHP_INT_SIZE;

// type casting.

$value = (int)"5";
$value = (integer)"5";

// Check the variable.
echo is_int($value);

// You cn assign value with underscore(_)
$value = 200_00_00; // It is more readable.