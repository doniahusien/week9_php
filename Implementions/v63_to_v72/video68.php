<?php
$chars= ["D","O","N","i","A"];

$first= array_shift($chars);

echo $first . "<br>";//D

echo "<pre>";
print_r($chars);// without first element
echo "</pre>";



$last= array_pop($chars);

echo $last . "<br>";//A

echo "<pre>";
print_r($chars);// without last element
echo "</pre>";

array_push($chars, "H");
echo "<pre>";
print_r($chars);// without last element
echo "</pre>";

$chars[] = "X"; //fast
echo "<pre>";
print_r($chars);// without last element
echo "</pre>";


array_unshift($chars, "d");
echo "<pre>";
print_r($chars);// without last element
echo "</pre>";