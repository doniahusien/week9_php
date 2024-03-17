<?php
date_default_timezone_get();
$d = date_create();
echo date_format($d, "Y") . "<br>";//2024
echo date_format($d, "y") . "<br>";//24

echo date_format($d, "M") . "<br>";//Mar
echo date_format($d, "m") . "<br>";//03
echo date_format($d, "F") . "<br>";//March

echo date_format($d, "Y-m") . "<br>";//2024-03
echo date_format($d, "Y-M") . "<br>";//2024-Mar
echo date_format($d, "y-m") . "<br>";//24-03
echo date_format($d, "y-F") . "<br>";//24-March
echo date_format($d, "t") . "<br>";// days of month 31


echo date_format($d, "d") . "<br>"; //with 0 like 08
echo date_format($d, "j") . "<br>";// day without 0 like 8

echo date_format($d, "Y-m-d") . "<br>";//2024-03-17
echo date_format($d, "Y-m-D") . "<br>";//2024-03-sun
echo date_format($d, "Y-m-l") . "<br>";//2024-03-sunday

echo date_format($d, "z") . "<br>";//76 of 365