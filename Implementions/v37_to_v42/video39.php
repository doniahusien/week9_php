<?php

for ($i=0; $i <5 ; $i++) {
    echo "$i<br>";
}

$j = 0;
for (; $j <5 ; ) {
    echo "$j<br>";
    $j++;
}


$index = 0;
for (;; ) {
    if ($index == 3) {
        break;
    } 
    echo "$index<br>";
    $index++;
}
$index = 0;
for (;; ) :
    if ($index == 3) {
        break;
    } 
    echo "$index<br>";
    $index++;
endfor;