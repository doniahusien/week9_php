<?php

$str = "Hanin";

echo $str[0]."<br>";
echo $str[3]."<br>";
echo "Number of letter ".strlen($str)."<br>";
echo "Last letter is ".$str[strlen($str)- 1]."<br>";
echo "Last of letter ".$str[-1]."<br>";
echo "Last of letter ".$str[-2]."<br>";

$str[3] = "e";
$str[5] = "n";
echo $str."<br>";