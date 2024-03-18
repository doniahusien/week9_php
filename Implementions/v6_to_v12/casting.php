<?php
echo 8+(int)"8 L";// 16 without warning
echo "<br>";
echo 8+(integer)"8 L";// 16 without warning
echo "<br>";
echo "<br>";

echo 6 + (int) 14.6;
echo "<br>";
echo gettype(6 + (int) 14.6);
echo "<br>";
echo "<br>";

echo gettype(10.5+ 10.5);
echo "<br>";
echo ((int) 10.5 + 10.5);//10+10.5
echo "<br>";
echo ((int) 10.5 + (int) 10.5);//10+10
echo "<br>";
echo "<br>";

echo (int) (10.5 + 10.5);//21 (integer)