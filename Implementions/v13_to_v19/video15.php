<?php

$n= "sohir";
$$n = "ahmed";
$$$n = "mousa";
echo $n;
echo "<br>";
echo $$n;
echo "<br>";
echo $sohir;
echo "<br>";
echo $$$n;
echo "<br>";
echo "Hello $$n";//$sohir
echo "<br>";
echo "Hello ${$n}";// $$n =>ahmed
echo "<br>";
echo "Hello ${$$n}";
