<?php

$friends=["haneen","rahma","samia","sohir","rahma","eman",1,"1"];
echo "<pre>";
print_r( array_keys( $friends ) );
echo "</pre>";

echo "<pre>";
print_r( array_keys( $friends ,"rahma") );
echo "</pre>";

echo "<pre>";
print_r( array_keys( $friends ,"1",true) );
echo "</pre>";


$countries = ["Eg" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
echo "<pre>";
print_r( array_values( $countries ) );
echo "</pre>";

$padArr = [8, 6, 3, 8];
echo "<pre>";
print_r( array_pad($padArr,10,"D") );
echo "</pre>";

echo "<pre>";
print_r( array_pad($padArr,-10,"D") );
echo "</pre>";


$nums = [10, 5, 2, 10];

echo array_product($nums)."<br>";

echo array_sum($nums)."<br>";