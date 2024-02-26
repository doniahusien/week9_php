<?php
echo 2 + "2";
echo "<br>";
echo gettype(2+"2");//integer
echo "<br>";
echo "<br>";

echo true; 
echo "<br>";
echo true + true;
echo "<br>";
echo gettype(true + true); //int
echo "<br>";
echo "<br>";

echo 8 + "8 L";//16 Warning
echo "<br>";
echo gettype(8 + "8 L");//int warning
echo "<br>";
echo "<br>";

echo 8 + 6.8;
echo "<br>";
echo gettype(8+8.6);
echo "<br>";