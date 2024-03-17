<?php
function addTitle($f,$l){
    return "Mr $f $l";
}
//echo addTitle("Ahmed");

$firstNames=["Ahmed","Ali","Yousef","Faris"];
$lastNames=["adel","ahmed","samir","mohamed"];

echo "<pre>";
print_r(array_map(fn($f,$l)=>"Hello Mr $f $l",$firstNames,$lastNames));
echo "</pre>";


$nums = [1 => 1, 6 => 5, 2 => 8, 7 => 6, 5 => 3];

echo "<pre>";
print_r(array_filter($nums, fn($n) => $n > 4));
echo "</pre>";
