<?php
function getData($name="Hanin", $country, $age=45, $address = "Private address"){
    $lineOne = "Your Country is $country and your name is $name <br>";
    $lineTwo = "Your age is $age and your address is $address";
    return $lineOne . $lineTwo;
}
echo getData("Ahmed","Egypt",25,"Cairo");
echo getData("Ahmed","Egypt",25);
echo getData(country: "Egypt");
