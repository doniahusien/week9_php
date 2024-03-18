<?php
//assign 1
$a = 100;
$b = 200;
$c = 100;

/*
Check That:
Variable "b" Larger Than Variable "a"
Variable "a" Identical To Variable "c"
Variable "a" Plus Variable "c" Identical To Variable "b"
*/
if ($b > $a && $a === $c && ($a + $c ===  $b)) {
    echo "YES";
}

//assign 2
$a = 200;
$b = 200;
$c = 100;

if ($a > $b) {
    echo "A Is Larger Than B";
} else if ($a > $c) {
    echo "A Is Larger Than c";
} else {
    echo "A Is Not Larger Than B Or C";
}
