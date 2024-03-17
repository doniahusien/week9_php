<?php
var_dump(strpos("Hello Hello","H"));
echo "<br>";
var_dump(strpos("Hello Hello","H",2));
echo "<br>";
var_dump(strpos("Hello Hello","H",6));
echo "<br>";
var_dump(strpos("Hello Hello","h",3));
echo "<br>";
var_dump(strpos("Hello Hello","H",-5)); 
echo "<br>";
var_dump(strpos("Hello Hello","H",-11)); 
echo "<br>";


var_dump(strrpos("Hello Hello","H")); 
echo "<br>"; 
var_dump(strrpos("Hello Hello","H",5));
echo "<br>";

var_dump(strrpos("Hello Hello","H")); 
echo "<br>"; 
var_dump(strrpos("Hello Hello","H",5));
echo "<br>";

var_dump(stripos("Hello Hello","h"));
echo "<br>";
var_dump(strripos("Hello Hello","h"));
echo "<br>";


var_dump(substr_count("Hello Hello","He"));
echo "<br>";
var_dump(substr_count("Hello Hello","He",1));
echo "<br>";
var_dump(substr_count("Hello Hello","He",1,6));
echo "<br>";
var_dump(substr_count("abcdabcda","abcda"));//1
echo "<br>";
