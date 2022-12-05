<?php

$x = 10;
$y = 2;

if($x == $y){
    // Do something...
}
else{
    // Do something else...
}

// another way
if($x == $y): ?>

<h1>Do Something</h1>

<?php endif;

// if-else ladder
if ($x == $y) {
    # code...
}elseif($x < $y){
    // Code...
}
else{
    // Code...
}