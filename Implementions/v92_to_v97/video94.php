<?php

$d = date_create();
//$d = date_create("2019-06-08 15:5:3");
echo date_format($d, "Y-m-d g a") . "<br>";//am
echo date_format($d, "Y-m-d g A") . "<br>";//AM


echo date_format($d, "Y-m-d h") . "<br>";//0 before hour

echo date_format($d, "Y-m-d G") . "<br>";
echo date_format($d, "Y-m-d H") . "<br>";

echo date_format($d, "Y-m-d H:i:s") . "<br>";
echo date_format($d, "Y-m-d H:i:s u") . "<br>";