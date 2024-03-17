<?php

$say_hello = function ($someone) {
    echo "Hello $someone <br>";
};
echo $say_hello("Hanin");


$say_hola = function ($someone) {
    echo "Hola $someone <br>";
};
echo $say_hola("Hanin");


$msg = "Hi";
$say_hi = function ($someone) use($msg) {
    echo "$msg $someone";
};
echo $say_hi("Sohir");


$nums = [10, 50, 20, 40, 70];
function AddFive($item){
    return $item+5;
}
$numsAfterAdd= array_map("AddFive", $nums);
echo "<pre>";
print_r($numsAfterAdd);
echo "</pre>";

$numsAfterAddTen = array_map(function ($item) {
    return $item + 10;
}, $nums);
echo "<pre>";
print_r($numsAfterAddTen);
echo "</pre>";