<?php

date_default_timezone_set("Africa/Cairo");

$reg = date_create("2022-06-08");
$now = date_create("now");


$diff = date_diff($reg, $now);

echo '<pre>';
print_r($diff);
echo '</pre>';

echo "You Are a Member For " . $diff->days . " days<br>";

echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("+2 year")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("1995-1-7"))) . "<br>";