<?php

// include | require | include_once | require_once

/*

include :- This is used to include any in this current file. It includes file multiple times how much times you used it. It throw warning if file does not exists and continue next execution.


require :- This is used to include any in this current file. It includes file multiple times how much times you used it. It throw error if file does not exists and do not execute next code.

include_once :- This is used to include any in this current file. It includes file only one time how much times you used it. It throw warning if file does not exists and continue next execution.


require_once :- This is used to include any in this current file. It includes file only one time how much times you used it. It throw error if file does not exists and do not execute next code.
*/

include 'file.php';
require 'file.php';
include_once 'file.php';
require_once 'file.php';