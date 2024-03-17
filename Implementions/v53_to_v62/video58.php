<?php

parse_str("name=hanin&email=hn@gmail.com",$query);
echo "<pre>";
print_r($query);
echo "</pre>";

echo $query["name"]."<br>";

echo "Hello [] () * / .<br>"; 
echo quotemeta("Hello [] () * / .<br>");


echo str_pad("12",8,0,STR_PAD_BOTH). "<br>";
echo str_pad("321" ,8,0,STR_PAD_BOTH). "<br>";
echo str_pad("1313",8,0,STR_PAD_BOTH) . "<br>";
echo str_pad("15435",8,0,STR_PAD_LEFT) . "<br>";
echo str_pad("500432" ,8,0,STR_PAD_LEFT). "<br>";

echo strtr("E@zero web schoo@","@","l")."<br>";

$trArr = ["@" => "l", "#" => "o"];
echo strtr("E@zer# web sch##@",$trArr)."<br>";