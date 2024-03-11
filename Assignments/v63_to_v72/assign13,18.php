<?php
//assign 13
$nums = [10, 100, -20, 50, 30];
function maxE(array $arr){
    $maxElement = $arr[0];
    foreach($arr as $num){
        if ($num > $maxElement) {
            $maxElement = $num;
        }
    }
    return $maxElement;
}
echo maxE($nums)."<br>";


//assign 14
$nums = [10, 100, -20, 50, 30];

function minE(array $arr){
    $minElement = 0;
    foreach($arr as $num){
        if ($num < $minElement) {
            $minElement = $num;
        }
    }
    return $minElement;
}
echo minE($nums)."<br>";


//assign 15
$chars = ["o", "r", "e", "z", "l", "E"];
function reverse($chars) {
    $reversed = [];
    for ($i = count($chars) - 1; $i >= 0; $i--) {
        $reversed[] = $chars[$i];
    }
    $result = "";
    foreach ($reversed as $char) {
        $result .= $char;
    }
    if ($result[0] >= 'a' && $result[0] <= 'z') {
        $result[0] = chr(ord($result[0]) - 32);
    }
    return $result;
}
echo reverse($chars);


//assign 16
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

echo "<pre>";
$x=array_filter(array_slice($mix,3),fn($n)=>$n%2!=0);
echo sort($x);
print_r($x);
echo "</pre>";


//assign 17
$nums = [1, 2, 3, 4, 5, 6];
function shuffleNum($arr) {
    $shuffled = [];
    while (!empty($arr)) {
        $key = array_rand($arr);
        $shuffled[] = $arr[$key];
        unset($arr[$key]);
    }
    return $shuffled;
}

$nums = [1, 2, 3, 4, 5, 6];
$sh=shuffleNum($nums);
echo "<pre>";
print_r($sh);
echo "</pre>";


//assign 18
$title = "E&z\$r0 W\$b Sch00&";
echo str_replace(["&", "\$", "0"], ["l", "e", "o"], $title, $count) . "<br>".$count;