<?php
$chars= ["D","O","N","i","A","H"];

echo "<pre>";
print_r(array_slice($chars,2));//N i A H
echo "</pre>";

echo "<pre>";
print_r(array_slice($chars,-1));//H
echo "</pre>";

echo "<pre>";
print_r(array_slice($chars,-3));//i A H
echo "</pre>";

echo "<pre>";
print_r(array_slice($chars,2,3));//N i A
echo "</pre>";


$chars_Skeys = ["A" => 1, "D" => 2, "B" => 8, "F" => 6];

echo "<pre>";
print_r(array_slice($chars_Skeys,0,2));
echo "</pre>";


$chars_Nkeys = [10 => 1, 20 => 2, 80 => 8, 60 => 6];

echo "<pre>";
print_r(array_slice($chars_Nkeys,0,2,true));
echo "</pre>";

echo "<pre>";
print_r($chars);
echo "</pre>";



$nums = [20, 80, 70, 60, 1, 8, 6];

echo "<pre>";
print_r(array_splice($nums,2,2,[4,7,0]));
echo "</pre>";

echo "<pre>";
print_r($nums);
echo "</pre>";
