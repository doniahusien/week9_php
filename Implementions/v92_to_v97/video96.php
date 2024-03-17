<?php
date_default_timezone_set("Africa/Cairo");

echo time() . "<br>";//seconds since 1-1-1970

echo time()/60 . " minutes" ."<br>";
echo time() / 60 / 60 . " Hours" . "<br>";
echo time() / 60 / 60 / 24 . " Days". "<br>";
echo time() / 60 / 60 / 24 / 365 . " Years" ."<br>";

echo "<pre>";
print_r(getdate());
echo "</pre>";

echo getdate()["year"] . "<br>";


echo "<pre>";
print_r(date_parse("1990-6-8 70:25:15"));
echo "</pre>";