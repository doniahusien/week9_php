<?php

$names=["haneen","rahma","samia","sohir","rahma","eman"];

sort($names);
echo "<pre>";
print_r($names);
echo "</pre>";

rsort($names);
echo "<pre>";
print_r($names);
echo "</pre>";


$countries = ["KSA" => "Saudi Arabia", "USA" => "United States","Eg" => "Egypt", "Sy" => "Syria"];

asort($countries);
echo "<pre>";
print_r($countries);
echo "</pre>";

arsort($countries);
echo "<pre>";
print_r($countries);
echo "</pre>";


$cods= ["1" => "Saudi Arabia", "5" => "United States","2" => "Egypt", "4" => "Syria"];

ksort($cods);
echo "<pre>";
print_r($cods);
echo "</pre>";

krsort($cods);
echo "<pre>";
print_r($cods);
echo "</pre>";


$files = ["p1.png", "p3.png", "p20.png"];

sort($files);
echo "<pre>";
print_r($files);
echo "</pre>";

natsort($files);
echo "<pre>";
print_r($files);
echo "</pre>";
