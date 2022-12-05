<?php

// Operator

// Arithmetic (+ - * / % **)
$x = 10;
$y = 2;
echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;
echo $x ** $y; // this will return x to the power y (10^2)=100

// Logical oprator (&& || !)
$z = $x && $y;
$z = $x || $y;
$z = !$x;

// Bit Wise operator (& | << >>)
$z = $x & $y;
$z = $x | $y;
$z = $x << $y;
$z = $x >> $y;