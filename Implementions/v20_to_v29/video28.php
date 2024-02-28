<?php
$x = 8;
$y = @$x or die("var not found");
echo "Test $y";

//file
$f = @file("text.txt");
echo"<pre>";
    print_r($f);
echo "</pre>";

//include 
include("text.txt");