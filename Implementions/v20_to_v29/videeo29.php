<?php
echo 8 + 6 * 2;
echo "<br>";
echo (8 + 6) * 2;
echo "<br>";
echo 2 || false;//1(true)
echo "<br>";


$a = 10 || false;//$a = (10 || false);
echo $a;//1
echo "<br>";

$b = 10 or false;//($b = 10) or false;
echo $b;//10