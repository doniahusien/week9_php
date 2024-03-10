<?php

echo strstr("Elzero Web" , "W") . "<br>";
echo strstr("Elzero Web" , "z") . "<br>";
echo strstr("Elzero Web" , "W",true) . "<br>";
echo strstr("Elzero Web" , "w") . "<br>";

echo stristr("Elzero Web" , "w") . "<br>";
echo stristr("Elzero Web" , "W") . "<br>";

echo 10_000_000 . "<br>";

echo number_format(10000000.156023) ."<br>";
echo number_format(10000000.156023,2) ."<br>";
echo number_format(10000000.156023,2,"@") ."<br>";
echo number_format(10000000.156023,2,"@","#") ."<br>";