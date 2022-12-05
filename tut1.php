<?php
    // How to define constant and use them.
    // Constant is case sensetive just like a variable and you can not change it later.

    define('MAX_VALUE', '255');

    // Use
    echo MAX_VALUE;

    // Check a constant is defined or not.
    if(defined('MAX_VALUE'))
        echo "Defined";
    else
        echo "Not defined";

    // Another way to define a constant.
    const MIN_VALUE = 0;
    echo MIN_VALUE;
    // With the const keyword it cannot be used in control structure.
    // For eg:-
    // if(true){
    //     const hii = "something";
    //     // It will give you the error.
    // }

    // Defining constant dynamically.
    $value = "VALUE";
    define('AVG_'. $value, "150");
    // It will act as AVG_VALUE

    //Some predefined constants.
    echo PHP_VERSION; // It will return your php version.
    echo __LINE__; // It will return your code line number. Here is 33.
    echo __FILE__; // It will return your current directory full path.
?>