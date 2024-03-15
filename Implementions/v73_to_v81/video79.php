<?php
$email = "d@gm.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo "<br>";

$int= "8";
var_dump(filter_var(
    $int, 
    FILTER_VALIDATE_INT,
    ["flags"=> FILTER_NULL_ON_FAILURE,"options"=>["min_range"=>4,"max_range"=>10]]
));

$float= "6";
var_dump(filter_var(
    $int, 
    FILTER_VALIDATE_FLOAT,
    ["flags"=> FILTER_NULL_ON_FAILURE,"options"=>["min_range"=>4,"max_range"=>10]]
));
