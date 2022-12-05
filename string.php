<?php

// String Demonstration

$firstName = "Mohd";
$lastName = "Amzad";

// String Concatination.
$name = $firstName . " " . $lastName;

echo $name;

// Access or update a character using index value.

echo $name[0]; // It will give you first character of the string.
$name[0] = "m"; // This will update your first character.

// Heredoc
// This isused to assign multiline string to a variable.

$text = <<<TEXT

Here is your multiline string
You can use multiple line as you want.

TEXT;

echo $text; // This will print in a single line.
// if you  want to print in multiple line as it is you can use:-
echo nl2br($text);


// Nowdoc
$text = <<<'TEXT'

The main difference is you can not use variable inside nowdoc.

LINE 1
LINE 2
LINE 3

TEXT;