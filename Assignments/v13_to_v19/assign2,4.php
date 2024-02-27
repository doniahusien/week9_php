<?php
//assign 2
$name = "elzero";
$$name = "Web";

echo $elzero;
echo $$name;
echo ${$name};
echo "{$$name}";
echo $GLOBALS[$name];

echo "<br>";

//assign 3
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
echo "<br>";

//assign 4
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER["HTTP_HOST"];
echo "<br>";
echo $_SERVER['SystemRoot'];
echo "<br>";
echo $_SERVER["OPENSSL_CONF"];

