<?php
//by value(default)
$n = "Samia";
$a = $n;
$a = "haneen";

echo $n;
echo "<br>";
echo $a;
echo "<br>";

//by refrence 
$x = "Samia";
$y = &$x;
$y = "haneen";

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x="sohir";
echo $y;
