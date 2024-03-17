<?php
$d = date_create();
echo date_format($d, "Y-m-d  H:i:s") . "<br>";

date_add($d, date_interval_create_from_date_string("2 months"));
echo date_format($d, "Y-m-d  H:i:s") . "<br>";
date_add($d, date_interval_create_from_date_string("2 months 8 days"));
echo date_format($d, "Y-m-d  H:i:s") . "<br>";
date_add($d, date_interval_create_from_date_string("2 years  2 months"));
echo date_format($d, "Y-m-d  H:i:s") . "<br>";


date_sub($d, date_interval_create_from_date_string("1 months"));
echo date_format($d, "Y-m-d  H:i:s") . "<br>";
date_sub($d, date_interval_create_from_date_string("5 days"));
echo date_format($d, "Y-m-d  H:i:s") . "<br>";


$d = date_create();
date_modify($d, "+5 months +4 years");

echo date_format($d, "Y/m/d H-i-s a");

