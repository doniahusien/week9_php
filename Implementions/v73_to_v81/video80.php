<?php

$email = "d@gm.c  om";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
echo "<br>";


$int = "10jj";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";//10

$float= "10,565,258.58 t #";
var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags"=>FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION ]
));
echo "<br>"; 


$url = "http    s://elzero.org/";
var_dump(filter_var($url, FILTER_SANITIZE_URL));
echo "<br>";
