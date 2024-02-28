<?php

$arr1 = [1 => "a", 2 => "b"];
$arr2 = [3 => "c", 4=> "d"];
echo "<pre>";
    print_r($arr1+$arr2);//union
echo "</pre>";

$arr4 = [1 => "10", 2 => "20"];
$arr5 = [2=> 20,1=> 10];
var_dump($arr4 == $arr5);//true
var_dump($arr4 <> $arr5);//false
echo "<br>";

$arr6 = [1 => "100", 2 => "200"];
$arr7 = [2 => 200, 1 => 100];
var_dump($arr6 === $arr7);//true
echo "<br>";

$arr6 = [1 => 100, 2 => 200];
$arr7 = [2 => 200, 1 => 100];
var_dump($arr6 === $arr7);//false (not order)