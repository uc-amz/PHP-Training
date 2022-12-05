<?php

$isComplete = true;

// You can also use it as capital letter.
$isComplete = TRUE;

echo $isComplete;

if($isComplete){
    // Do something.
}else{
    // Do something else.
}

// Check if a variable is boolean or not.

echo is_bool($isComplete); // This will return true if the variable is boolean.