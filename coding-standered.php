<?php

// Autoload registration.

spl_autoload_register(function($variable){
    var_dump("This is in the autoloaded");
});

