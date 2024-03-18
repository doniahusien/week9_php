<?php
$countries = ['EG', "SA", "QA"];
echo "<pre>";
print_r($countries);
echo "</pre>";

foreach ($countries as $country) :
    echo "$country <br>";
endforeach;

$countries_disc = ['EG'=>50, "SA"=>20, "QA"=>70];
echo "<pre>";
print_r($countries_disc);
echo "</pre>";

foreach ($countries_disc as $country=> $discount) {
    echo "country is $country and discount is $discount <br>";
}