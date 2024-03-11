<?php

$friends=["haneen","samia","sohir","rahma","eman"];

echo "<pre>";
print_r(array_chunk($friends,3));
echo "</pre>";


$countries = ["Eg" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

echo "<pre>";
print_r(array_chunk($countries,3,true));
echo "</pre>";


echo "<pre>";
print_r(array_change_key_case($countries,CASE_LOWER));
echo "</pre>";



$keys = ["S", "H", "R"];
$value = ["Samia", "Haneen", "Rahma"];
echo "<pre>";
print_r(array_combine($keys,$value));
echo "</pre>";


$counts = [1, 2, 3, 4, 4, 1, 2, 3, 1];
echo "<pre>";
print_r(array_count_values($counts));
echo "</pre>";
