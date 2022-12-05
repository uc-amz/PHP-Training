<?php

// Working with date and time.

$date = date('d/m/Y'); // It will give you current date.

$time = date('g:ia'); // It will give current time like:- 11:20PM

$datetime = date('d/m/Y g:ia', strtotime("2022-11-21 21:23:00"));

$datetime = date('d/m/Y g:ia', strtotime("first day of january"));


$datetime = date('d/m/Y g:ia', strtotime("first friday of january"));


$datetime = date('d/m/Y g:ia', strtotime("second friday of april"));

echo $datetime;