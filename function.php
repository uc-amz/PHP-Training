<?php

// Function in php
declare(strict_types=1);

function sum(int $a, int $b){
    return "";
}

$x = sum(2, 3);

// Another way
function sum2(int $a, int $b): int {
    return $a+$b;
}

// You can define function inside a function.
function foo(){
    echo "Foo";
    function bar(){
        "Bar";
    }
}

foo();
bar();

// Multiple parameteric function
function sum3(...$numbers){
    $sum = 0;

    foreach($numbers as $num)
        $sum += $num;
    return $sum;
}

// Calling function with named argument
sum2(a: 10, b: 20);

// You can call a function by variable.
$fun = 'sum3';

$add = $fun(2, 4, 6, 2); // If this name of function is not exists then it will throw error.

// Check if a function is callable or not.

if(is_callable($fun)){
    $fun(3, 5, 3);
}
else{
    echo "Not callable";
}