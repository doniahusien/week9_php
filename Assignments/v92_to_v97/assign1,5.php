<?php

//assign 1
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";

$d = date_create("");
echo date_format($d,"D, d  M  y -  h:i:s A") ."<br>";
echo date_format($d,"l, d  F  Y -  h:i:s A") ."<br>";
echo "<br>";


//assign 2
$date = "2005-10-02 ";

date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get() . "<br>";
$d = date_create($date);

date_add($d, date_interval_create_from_date_string("15 hours 15 minutes 15 seconds"));
echo date_format($d, "Y, F, l  'dS'  H:i:s") . "<br>";
echo "<br>";


//assign 3
$date = "1990-10-01";
date_default_timezone_set("Africa/Cairo");
$days= strtotime($date)/(24 * 60 * 60);
$years =$days /365;

echo "From Epoch Time Till $date Is Approximately " . round($days, 1) . " Days <br>";
echo "From Epoch Time Till $date Is Approximately " . round($years, 1) . " Years <br>";

echo "<br>";



//assign 4

$date = "1990-10-01";
$date1 = date_create($date);
$date2 = date_create('1970-01-01');

$diff = date_diff($date2, $date1);

$days = $diff->days;
$years = $days / 365;

echo "From Epoch Time Till $date Is Approximately " . round($days, 1) . " Days <br>";
echo "From Epoch Time Till $date Is Approximately " . round($years, 1) . " Years <br>";



//assign 5
echo time() . "<br>";

echo strtotime('now') . "<br>";
$date = new DateTime();
echo $date->getTimestamp() . "<br>";

$t = getdate();
echo $t[0] . "<br>";

