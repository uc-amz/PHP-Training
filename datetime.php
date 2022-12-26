<?php

// Working with date and time:-

$datetime = new DateTime('', new DateTimeZone('Indian'));
$datetime->setTimezone(new DateTimeZone('Indian'));

var_dump($datetime);

$datetime->format('dd-mm-YYYY');