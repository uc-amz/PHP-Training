<?php

// Array

$programmingLanguages = ['PHP', 'Java', 'Python'];

// Another way
$programmingLanguages = array('PHP', 'Java', 'Python');

// Accessing array with index.
echo $programmingLanguages[1]; // It will print Java

// Printing full array.
var_dump($programmingLanguages);

// Another way
print_r($programmingLanguages);

// Another way
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Another way by using heredoc

$text = <<<TEXT
<pre>
$prgrammingLanguages
</pre>
TEXT;

print_r($text);


// Conting the number of elements
count($prgrammingLanguages); // It will returns the number of elements in an array.

// Array  with custom key

$newArray = array(
    'PHP' => '8.0', 'Python' => '3.9'
);

print_r($newArray);
echo $newArray['PHP'];

// Insert New element
$prgrammingLanguages[] = "C++";

// Remove en element from back
array_pop($programmingLanguages);

// Remove from front
array_shift($programmingLanguages);

// Remove specific
unset($prgrammingLanguages['C++']);