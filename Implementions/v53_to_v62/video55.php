<?php
$str = "elzero web school Is cool";
$names = ["Haneen", "Eman", "Rahma", "Zahraa"];


echo implode(" ", $names);
echo implode(", ", $names)."<br>";

echo "<pre>";
print_r(explode("I", $str));
echo "</pre>";

echo "<pre>";
print_r(explode(" ", $str,3));
echo "</pre>";

echo "<pre>";
print_r(explode(" ", $str,-3));
echo "</pre>";

echo str_shuffle("Ali")."<br>";
echo strrev("Samia")."<br>";

echo strlen(" Elzero   web  ")."<br>";
echo trim(" Elzero   web  ")."<br>";
echo strlen(trim(" Elzero   web  "))."<br>";
echo trim("#  Elzero##","#")."<br>";
echo rtrim("#  Elzero##","#")."<br>";
echo ltrim("#  Elzero##","#")."<br>";
