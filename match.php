<?php

// match expression
$variable = 2;

match($variable){
    1 => "Case 1 matched",
    2 => "Case 2 matched",
    default => "Default case matched"
};