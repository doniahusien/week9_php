<?php

//assign 1

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";
echo str_replace([$str[$num_one],$str[(int)$num_two]],[$let_one,$let_two], $str);

echo "<br>";


//assign 2
$str = "Orezle";

echo  ucfirst(strtolower((strrev(($str)))));
echo "<br>";
// Elzero


//assign 3
$str = 'aAa';
$num = 3;
$char = "_";
echo str_repeat(str_pad(strtolower($str),++$num,$char),--$num);
echo "<br>";

//assign 4
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str,"<b>");
// <b>Elzero</b>