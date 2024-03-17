<?php
function addFive($num){
    $num+=5;
    return $num;
}


$n = 10;
echo addFive($n)."<br>";//15 by value
echo $n."<br>";//10

function calc($n1, $n2):int{
    return $n1 + $n2;
}
echo calc(9.5,10.5);
var_dump(calc(9.5,10.5));
