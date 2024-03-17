<?php
$mergeOne = ["One" => "JS", "Two" => "CSS", "Three" => "HTML"];
$mergeTwo = ["One" => "PHP", "Four" => "Python"];

echo "<pre>";
print_r(array_merge($mergeOne, $mergeTwo));
echo "</pre>";


$mergeThree = [10 => "JS", 20 => "CSS", 30 => "HTML"];
$mergeFour = [40 => "Python",20=>"Go"];

echo "<pre>";
print_r(array_merge($mergeThree, $mergeFour));
echo "</pre>";


$main = ["One" => "JS", "Two" => "CSS", "Three" => "HTML"];
$replace= ["One" => "PHP", "Four" => "Python"];

echo "<pre>";
print_r(array_replace($main, $replace));
echo "</pre>";

echo "<pre>";
print_r(array_replace($mergeThree, $mergeFour));
echo "</pre>";

$nums = [1, 2, 3, 8, 6];
echo array_rand($nums) . "<br>";//random key not value
echo $nums[array_rand($nums)];

echo "<pre>";
print_r(array_rand($nums,2));
echo "</pre>";


shuffle($nums);
echo "<pre>";
print_r($nums);
echo "</pre>";