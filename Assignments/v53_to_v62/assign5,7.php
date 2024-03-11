<?php

//assign 5
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four);
echo substr_count($str, strtolower($o), strpos($str, strtolower($o),$four)+1);

echo "<br>";
//assign 6
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode("", $chars);

echo "<br>";
echo "<br>";
echo "<br>";
//assign 7

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo "<br>";
echo ucfirst(strtolower(implode($chars)));
