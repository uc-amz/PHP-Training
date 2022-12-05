<?php

// tick

function onTick(){
    echo "Tick\n";
}

register_tick_function('onTick');

declare(ticks=1);


for($i=0;$i<=10;$i++){
    echo $i . " ";
}