<?php

//assign 1
$index = 10;
while($index>=1){
    echo "$index <br>";
    $index--;
}

//assign 2
$index = 0;

while ($index < 20) {
    $index+=2;
    echo "$index <br>";
}

do {
    $index += 2;
    echo "$index <br>";
} while ($index < 20);

for ($index = 0; $index <= 20;$index++) {
    if ($index %2 != 0 ||$index==0) {
        continue;
    }
    echo "$index <br>";
}