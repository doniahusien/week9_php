<?php
// Replace ? With Arithmetic Operators
echo 10 * 20 + 15 % 3 + 190 + 10 - 400;
echo "<br>";

//assign 2
$a = "10";
echo +$a;
echo "<br>";
echo gettype(+$a);
echo "<br>";


$a = "10";
echo 0+$a;
echo "<br>";
echo gettype(0+$a);
echo "<br>";


$a = "10";
echo false+$a;
echo "<br>";
echo gettype(false+$a);
echo "<br>";

echo (int) $a;
echo "<br>";
echo gettype((int) $a);
echo "<br>";

echo intval($a);
echo "<br>";
echo gettype(intval($a));
echo "<br>";


//assign 3
$a = 10;
$b = 20;

echo ($a <=> $b);

//assign 4
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a != $b); // True

var_dump($a <= $b); // True
var_dump($a <> $c); // True
var_dump($a !== $c); // True


var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True
echo "<br>";


//assign 5
$points = 10;

$points++;
$points++;
$points++;

echo $points; // 13

$points--;
$points--;
$points--;
$points--;
$points--;

echo $points; // 8;

//assign 6
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = $a." ".$b." ".$c;

// Method Three
$d = "{$a} {$b} {$c}";

// Method Four
$d = nl2br("$a $b $c");

echo $d; // Elzero Web School


//assign 7
$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000

//assign 8
// Code 1
$a = @$b;

// Code 2
@$f = file("Not_A_File") or die("Custom Error");

// Code 3
include("Not_A_File");
