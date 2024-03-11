<?php

$friends=["haneen","rahma","samia","sohir","rahma","eman"];
echo current($friends) . "<br>";//haneen
echo next($friends) . "<br>";//rahma
echo current($friends) . "<br>";//rahma
echo next($friends) . "<br>";//samia
echo prev($friends) . "<br>";//rahma
echo reset($friends)."<br>";//haneen
echo end($friends) . "<br>";//eman