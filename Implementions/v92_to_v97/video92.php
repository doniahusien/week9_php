<?php

echo date_default_timezone_get() . "<br>";
echo date("Y-m-d H:i:s") . "<br>";

//change time zone
date_default_timezone_set("Africa/Cairo") . "<br>";
echo date("Y-m-d H:i:s") . "<br>";

echo date_default_timezone_get() . "<br>";

$d = date_create("", timezone_open("Indian/Antananarivo"));
echo date_format($d,"Y-m-d H:i:s");

echo "<br>";
var_dump(checkdate(31, 02, 1982));
echo "<br>";
var_dump(checkdate(31, 02, 3500));
echo "<br>";
var_dump(checkdate(-8, 06, 2003));