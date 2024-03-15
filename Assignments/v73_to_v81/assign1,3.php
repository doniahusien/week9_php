<?php


//assign 1
$randVal = rand(10, 20);
$result = ($randVal == 10) ? 11 : (($randVal == 20) ? 19 : $randVal); 
echo $result."<br>";

//assign 2
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[rand(0,count($friends)-1)]."<br>";


//assign 3

$num1 = 11.5; // 11
echo round($num1, 0, PHP_ROUND_HALF_ODD) . "<br>";

$num2 = 9.4898; // 9.5
echo round($num2, 1, PHP_ROUND_HALF_UP) . "<br>";


$num3 = -7.5; //-7
echo round($num3, 0, PHP_ROUND_HALF_DOWN) . "<br>";